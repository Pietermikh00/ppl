<?php

namespace App\Policies;

use App\Models\RatingComment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RatingCommentPolicy
{
    use HandlesAuthorization;

    public function update(User $user, RatingComment $review): bool
    {
        return $user->id === $review->user_id || $user->role === 'admin';
    }

    public function delete(User $user, RatingComment $review): bool
    {
        return $user->id === $review->user_id || $user->role === 'admin';
    }
}

