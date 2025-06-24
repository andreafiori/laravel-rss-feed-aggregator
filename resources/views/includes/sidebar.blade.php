<div class="position-sticky">

  <!-- <div class="p-4 mb-3 bg-body-tertiary rounded">
    <h4 class="fst-italic">About</h4>
    <p class="mb-0">RSS feeds are still grat! A way to read information, news, and updates from the
      greatest websites and applications of your interests. A great way to keep us updated
      whenever we want without visiting multiple websites and saving a lot of time!</p>
  </div> -->

  @php
    $routeName = Route::currentRouteName();
    $params = Route::current()->parameters();
  @endphp

  <div class="p-4">
    @foreach ($feeds as $feedGroup)
        <h4 class="fst-italic">{{ $feedGroup['label'] }}</h4>
        @foreach($feedGroup['feeds'] as $feed)
            <div>{{ $feed['label']  }}</div>
            <ul class="list-unstyled mb-0 ps-4">
                @foreach ($feed['feeds'] as $fd)
                    <li><a href="/feed/{{ $feedGroup['slug'] }}/{{ $feed['slug'] }}/{{ $fd['slug'] }}">{{ $fd['label'] }}</a></li>
                @endforeach
            </ul>
            <!-- @if(!isset($feed['label']))
            <pre>{{ print_r($feed, 1) }}</pre>
            @endif -->
        @endforeach
    @endforeach
  </div>

</div>
