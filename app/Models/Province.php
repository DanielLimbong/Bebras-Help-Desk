<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /*
     *@return HasMany provinces
     */
    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class);
    }

    /*
     *@return HasMany users
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
