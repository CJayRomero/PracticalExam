<?php

namespace App\Policies;

use App\Models\Post; // Use the correct Post model
use App\Models\User; // Use the correct User model

class PostPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     */
    public function update(User $user, Post $post)
    {
        return $post->user_id === $user->id;
    }

    /**
     * Determine if the given post can be deleted by the user.
     */
    public function delete(User $user, Post $post)
    {
        return $post->user_id === $user->id;
    }
}
