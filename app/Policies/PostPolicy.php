<?php

namespace App\Policies;

use App\Models\User;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, Post $post)
{
    return $post->user_id === $user->id;
}

public function delete(User $user, Post $post)
{
    return $post->user_id === $user->id;
}
}
