<?php

namespace App\Services;

use SimplePie;
use App\Models\FeedAggregator;

class FeedReader
{
    public function read(string $url): ?SimplePie
    {
        $feed = new SimplePie();
        $feed->set_feed_url($url);
        $feed->enable_cache(false);
        $feed->init();
        $feed->handle_content_type();

        return $feed;
    }

    public function getAllFeeds()
    {
        $categories = new FeedAggregator();

        return $categories->getAllFeeds();
    }

    public function getFeedsByCategoryAndSlug(string $category, string $feedSlug)
    {
        $allFeeds = $this->getAllFeeds();
        if (isset($allFeeds[$category])) {
            $feed = null;
            foreach($allFeeds[$category]['newsgroup'] as $newsgroup) {
                foreach($newsgroup['feeds'] as $rssFeed) {
                    if ($rssFeed['slug'] === $feedSlug) {
                        $feed = $rssFeed;
                        break;
                    }
                }
            }
            return $feed;
        }
        return null;
    }


}
