<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faq extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'question',
        'answer',
    ];
    /* 
     *@return BelongsTo question
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
    *@return HasMany faqvotes
    */
    public function faqvotes(): HasMany
    {
        return $this->hasMany(FaqVote::class);
    }
}
