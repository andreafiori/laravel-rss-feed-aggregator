<?php

namespace App\Services;

use SimplePie;

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
}
