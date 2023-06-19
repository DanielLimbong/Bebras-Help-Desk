<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Answer extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question_id',
        'user_id',
        'text',
    ];
    /* 
     *@return BelongsTo question
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /* 
     *@return BelongsTo user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
     *@return HasMany comments
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }


}
