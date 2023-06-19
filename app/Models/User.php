<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Laravel\Sanctum\HasApiTokens;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements FilamentUser 
{
    use HasApiTokens, HasFactory, Notifiable;
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'province_id',
        'regency_id',
        'district_id',
        'level_id',
        'name',
        'address',
        'school',
        'phone',
        'email',
        'password',
    ];

    // /* 
    //  *@return BelongsTo province
    //  */
    // public function province(): BelongsTo
    // {
    //     return $this->belongsTo(Province::class);
    // }

    // /* 
    //  *@return BelongsTo regency
    //  */
    // public function regency(): BelongsTo
    // {
    //     return $this->belongsTo(Regency::class);
    // }

    // /* 
    //  *@return BelongsTo district
    //  */
    // public function district(): BelongsTo
    // {
    //     return $this->belongsTo(District::class);
    // }

    // /* 
    //  *@return BelongsTo level
    //  */
    // public function level(): BelongsTo
    // {
    //     return $this->belongsTo(Level::class);
    // }

    /*
     *@return HasMany answers
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    /*
     *@return HasMany comments
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /*
     *@return HasMany questions
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    /*
     *@return HasMany faqs
     */
    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class);
    }

    /*
     *@return HasMany faqvotes
     */
    public function faqvotes(): HasMany
    {
        return $this->hasMany(Comment::class);
    }


public function canAccessFilament(): bool
    {
        return true;
    }
}