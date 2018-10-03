<?php

namespace App\Models;

class Post extends Model
{
    /**
     * Returns the user that created this post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Returns the comments that belong to this post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // /**
    //  * Get all of the tags for the post.
    //  */
    // public function tags()
    // {
    //     return $this->morphToMany(Tag::class, 'taggable')->withPivot('notes');
    // }
}