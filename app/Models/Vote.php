<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'answer_id',
        'user_id',
        'helpful',
    ];

    /* 
     *@return BelongsTo answers
     */
    public function answer(): BelongsTo
    {
        return $this->belongsTo(Answer::class);
    }

    /* 
     *@return BelongsTo user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
