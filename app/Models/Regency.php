<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regency extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'province_id',
        'name',
    ];

    /*
     *@return HasMany districts
     */
    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }

    /* 
     *@return BelongsTo province
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    /*
     *@return HasMany users
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
