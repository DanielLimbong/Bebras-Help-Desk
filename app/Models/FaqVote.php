<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FaqVote extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'faq_id',
        'user_id',
        'helpful',
    ];

    /* 
     *@return BelongsTo faq
     */
    public function faq(): BelongsTo
    {
        return $this->belongsTo(Faq::class);
    }

    /* 
     *@return BelongsTo user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
