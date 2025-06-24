<?php

namespace App\Models;

class FeedAggregator
{
    public function getFeedsCategories()
    {
        return [
            // 'news' => [
            //     'label' => 'News',
            //     'slug' => 'news',
            //     'feeds' => []
            // ],
            'software-development' => [
                'label' => 'Software Development',
                'slug' => 'software-development',
                'feeds' => []
            ],
            'sports' => [
                'label' => 'Sports',
                'slug' => 'sports',
                'feeds' => [],
            ],
            'cyber-security' => [
                'label' => 'Cyber Security',
                'slug' => 'cyber-security',
                'feeds' => [],
            ],
            'gaming' => [
                'label' => 'Gaming',
                'slug' => 'gaming',
                'feeds' => [],
            ],

        ];
    }

    public function getAllFeeds()
    {
        $categories = $this->getFeedsCategories();
        $categories['software-development']['feeds'] = (new SoftwareDevelopmentFeeds())->getFeeds();
        $categories['cyber-security']['feeds'] = (new CybersecurityFeeds())->getFeeds();

        return $categories;
    }
}
