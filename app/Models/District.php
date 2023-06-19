<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'regency_id',
        'name',
    ];

    /* 
     *@return BelongsTo regency
     */
    public function regency(): BelongsTo
    {
        return $this->belongsTo(Regency::class);
    }

    /*
     *@return HasMany users
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
