<?php

namespace App\Filament\Pages;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Http\Livewire\Auth\Login as FilamentLogin;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Filament\Notifications\Notification;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use JeffGreco13\FilamentBreezy\Events\LoginSuccess;
use JeffGreco13\FilamentBreezy\FilamentBreezy;

class Login extends FilamentLogin
{
 public function authenticate(): ?LoginResponse
    {
        // Form data
        $data = $this->showCodeForm ? $this->twoFactorForm->getState() : $this->form->getState();

        if (config('filament-breezy.enable_2fa')) {
            if ($this->showCodeForm) {
                // Verify the code, then attempt to log them in now.
                if (! $this->hasValidCode()) {
                    $this->addError('code', __('filament-breezy::default.profile.2fa.confirmation.invalid_code'));

                    return null;
                }
                Filament::auth()->login($this->user, $this->remember);

                event(new LoginSuccess($this->user));

                return app(LoginResponse::class);
            } else {
                // Validate the user's login details in order to show them the code challenge.
                $this->doRateLimit();

                $model = Filament::auth()->getProvider()->getModel();
                $this->user = $model::where($this->loginColumn, $data[$this->loginColumn])->first();

                // If the user hasn't setup 2FA, authenticate and exit early.
                if ($this->user && ! $this->user->has_confirmed_two_factor) {
                    // THIS is where we can force 2fa...
                    return $this->attemptAuth($data);
                }

                if (! $this->user || ! Filament::auth()->getProvider()->validateCredentials($this->user, ['password' => $data['password']])) {
                    $this->addError($this->loginColumn, __('filament::login.messages.failed'));

                    return null;
                }

                $this->password = null;
                $this->showCodeForm = true;

                return null;
            }
        } else {
            $this->doRateLimit();

            return $this->attemptAuth($data);
        }
    }

    protected function getFormSchema(): array
    {
        $parentSchema = parent::getFormSchema();
        if ($this->loginColumn !== 'phone') {
            // Pop off the email field and replace it with loginColumn
            unset($parentSchema[0]);
            $parentSchema = Arr::prepend(
                $parentSchema,
                TextInput::make('phone')
                    ->label('Phone')
                    ->required()
                    ->autocomplete()
            );
        }

        return $parentSchema;
    }
}