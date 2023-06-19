<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /*
     *@return HasMany answers
     */
    public function questiontags(): HasMany
    {
        return $this->hasMany(QuestionTag::class);
    }
}
