<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\FeedAggregator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $feedAggregator = new FeedAggregator();

        view()->share('feedsCategories', $feedAggregator->getFeedsCategories());
        view()->share('feeds', $feedAggregator->getAllFeeds());
    }
}
