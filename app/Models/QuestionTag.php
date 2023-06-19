<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuestionTag extends Model
{
    // Base Model
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question_id',
        'tag_id',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    /* 
     *@return BelongsTo question
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /* 
     *@return BelongsTo tag
     */
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
