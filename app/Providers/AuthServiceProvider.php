<?php

namespace App\Providers;

use App\Models\RatingComment;
use App\Policies\RatingCommentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        RatingComment::class => RatingCommentPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}

