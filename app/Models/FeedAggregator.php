<?php

namespace App\Models;

use App\Models\SoftwareDevelopmentFeeds;
use App\Models\CybersecurityFeeds;
use App\Models\GamingFeeds;


class FeedAggregator
{
    public function getFeedsCategories()
    {
        return [
            // 'news' => [
            //     'label' => 'News',
            //     'slug' => 'news',
            //     'newsgroup' => []
            // ],
            'software-development' => [
                'label' => 'Software Development',
                'slug' => 'software-development',
                'newsgroup' => []
            ],
            // 'sports' => [
            //     'label' => 'Sports',
            //     'slug' => 'sports',
            //     'newsgroup' => [],
            // ],
            'cyber-security' => [
                'label' => 'Cyber Security',
                'slug' => 'cyber-security',
                'newsgroup' => [],
            ],
            'gaming' => [
                'label' => 'Gaming',
                'slug' => 'gaming',
                'newsgroup' => [],
            ],
        ];
    }

    public function getAllFeeds()
    {
        $categories = $this->getFeedsCategories();
        $categories['software-development']['newsgroup'] = (new SoftwareDevelopmentFeeds())->getFeeds();
        $categories['cyber-security']['newsgroup'] = (new CybersecurityFeeds())->getFeeds();
        $categories['gaming']['newsgroup'] = (new GamingFeeds())->getFeeds();

        return $categories;
    }
}
