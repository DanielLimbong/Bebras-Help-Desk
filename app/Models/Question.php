<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'text',
    ];

     /* 
     *@return BelongsTo user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
    *@return HasMany answers
    */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    /*
    *@return HasMany questiontags
    */
    public function questiontags(): HasMany
    {
        return $this->hasMany(QuestionTag::class);
    }    
}
