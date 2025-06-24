@extends('layouts.app')

@section('title', 'Page Title')

@section('fullwidth')

<!-- Hero section home page -->
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
      <div class="col-lg-12 px-0">
        <h1 class="display-12 fst-italic">The RSS feed aggregator you need</h1>
        <p class="lead my-3">Multiple feeds, categories and sub-categories.</p>
        <!-- <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p> -->
      </div>
    </div>

    <div class="row">
        @foreach ($feeds as $feedGroup)
            <div class="col-12 text-center">
                <h4 class="fst-italic">{{ $feedGroup['label'] }}</h4>
            </div>

            @foreach($feedGroup['newsgroup'] as $feed)
                <div class="col-4">
                    <div class="border p-3 mb-3">
                        <h5>{{ $feed['label']  }}</h5>
                        <div class="ps-2">
                            <ul class="list-unstyled">
                                @foreach ($feed['feeds'] as $fd)
                                    <!-- <li><strong>Active feed with no link</strong></li> -->
                                    <li>
                                        &raquo; <a href="/feed/{{ $feedGroup['slug'] }}/{{ $feed['slug'] }}/{{ $fd['slug'] }}">{{ $fd['label'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach

    </div>
@endsection
</div>
<!-- @section('sidebar_content')

@endsection -->
