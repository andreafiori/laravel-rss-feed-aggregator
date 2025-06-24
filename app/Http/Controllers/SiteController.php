<?php

namespace App\Http\Controllers;

use App\Models\FeedAggregator;
use App\Services\FeedReader;

class SiteController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function details(string $category, string $group, string $feedSlug)
  {
    $feedsCategories = new FeedAggregator();
    $allFeeds = $feedsCategories->getAllFeeds();

    if (!isset($allFeeds[$category])) {
        // TODO throw error not found
    }

    // TODO search the category, group and $feed URL to parse, show the list of news with link to a new
    // echo "<pre>". print_r($allFeeds[$category], 1). "</pre>"; exit;

    $feed = null;
    foreach($allFeeds[$category]['newsgroup'] as $newsgroup) {
        // echo "<pre>". print_r($newsgroup , 1). "</pre>";

        foreach($newsgroup['feeds'] as $rssFeed) {
            if ($rssFeed['slug'] === $feedSlug) {
                $feed = $rssFeed;
                break;
            }
        }
    }

    if (!$feed) {
        // TODO throw error not found
    }

    $reader = new FeedReader();
    $data = $reader->read($feed['url']);

    return view('details', compact(['data', 'feed']));
  }

}
