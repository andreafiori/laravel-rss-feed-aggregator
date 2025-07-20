<?php

namespace App\Models;

use App\Models\SoftwareDevelopmentFeeds;
use App\Models\CybersecurityFeeds;
use App\Models\GamingFeeds;
use App\Models\AIFeeds;
use App\Models\NewsFeeds;

class FeedAggregator
{
    public function getFeedsCategories()
    {
        return [
            'news' => [
                'label' => 'News',
                'slug' => 'news',
                'newsgroup' => []
            ],
            'software-development' => [
                'label' => 'Software Development',
                'slug' => 'software-development',
                'newsgroup' => []
            ],
            'artificial-intelligence' => [
                'label' => 'AI',
                'slug' => 'artificial-intelligence',
                'newsgroup' => []
            ],
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
            // 'sports' => [
            //     'label' => 'Sports',
            //     'slug' => 'sports',
            //     'newsgroup' => [],
            // ],
        ];
    }

    public function getAllFeeds()
    {
        $categories = $this->getFeedsCategories();
        $categories['news']['newsgroup'] = (new NewsFeeds())->getFeeds();
        $categories['software-development']['newsgroup'] = (new SoftwareDevelopmentFeeds())->getFeeds();
        $categories['artificial-intelligence']['newsgroup'] = (new AiFeeds())->getFeeds();
        $categories['cyber-security']['newsgroup'] = (new CybersecurityFeeds())->getFeeds();
        $categories['gaming']['newsgroup'] = (new GamingFeeds())->getFeeds();
        // $categories['sports']['newsgroup'] = (new SportsFeeds())->getFeeds();

        // Sort all feeds alphabetically
        foreach($categories as &$category) {
            // Sort newsgroups
            usort($category['newsgroup'], function ($a, $b) { return $a['label'] > $b['label']; });
            foreach($category['newsgroup'] as &$newsgroup) {
                if ( !isset($newsgroup['nosorting']) ) {
                    // Sort feeds
                    usort($newsgroup['feeds'], function ($a, $b) { return $a['label'] > $b['label']; });
                }
            }
        }

        return $categories;
    }
}
