<?php

namespace App\Http\Controllers;

use App\Services\FeedReader;

class SiteController extends Controller
{
  public function index()
  {
    return view('index');
  }

  /**
   * Search the category, group and $feed URL to parse, show the list of news with link to a new page
   *
   * @param string $category
   * @param string $group
   * @param string $feedSlug
   * @return \Illuminate\Contracts\View\View
   */
  public function details(string $category, string $group, string $feedSlug)
  {
    $reader = new FeedReader();
    $feed = $reader->getFeedsByCategoryAndSlug($category, $feedSlug);

    if (!$feed) {
        abort(404, 'Page not found'); // TODO build a 404 page instead
    }

    $data = $reader->read($feed['url']);

    return view('details', [
        'data' => $data,
        'feed' => $feed,
        'category' => $category,
        'group' => $group,
        'slug' => $feedSlug,
    ]);
  }

}
