<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedAggregator;
use App\Services\FeedReader;

class SiteController extends Controller
{
  public function index()
  {
    $reader = new FeedReader();
    $data = $reader->read('https://laracasts.com/feed');
    return view('index', compact(['data']));
  }

//   public function category(string $category)
//   {
//     return view('category');
//   }

  public function show(string $category, string $group, string $feed)
  {
    $feedsCategories = new FeedAggregator();
    $allFeeds = $feedsCategories->getAllFeeds();

    // TODO search the category, group and $feed URL to parse, show the list of news with link to a new
    // echo "<pre>". print_r($allFeeds[$category], 1). "</pre>"; exit;

    // if (!empty($allFeeds[$category])) {
    //     foreach($allFeeds[$category] as $feed) {
    //         foreach($feed['feeds'] as $elem) {
    //             if ($elem['slug'] == $feed) {
    //                 return $elem;
    //             }
    //         }
    //     }
    // }

    $reader = new FeedReader();
    $data = $reader->read('https://laracasts.com/feed');
    return view('show', compact(['data']));
  }


}
