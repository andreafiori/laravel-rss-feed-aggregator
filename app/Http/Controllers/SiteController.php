<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FeedReader;

class SiteController extends Controller
{
  public function index()
  {
    $reader = new FeedReader();
    $data = $reader->read('https://laracasts.com/feed');

    // echo "<pre>". print_r($data,1) ."</'pre>";

    $feeds = [
        'software-development' => [
            'title' => 'Software development',
            'slug' => 'software-development',
            'feeds' => [] // TODO feeds list
        ],
        'cyber-security' => [
            'title' => 'Cyber security',
            'slug' => 'cyber-security',
            'feeds' => [] // TODO feeds list
        ],
        'gaming' => [
            'title' => 'Gaming',
            'slug' => 'gaming',
            'feeds' => [] // TODO feeds list
        ],
    ];

    return view('index', compact(['data']));
  }
}
