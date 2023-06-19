<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
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
     *@return HasMany levels
     */
    public function levels(): HasMany
    {
        return $this->hasMany(Level::class);
    }
}
