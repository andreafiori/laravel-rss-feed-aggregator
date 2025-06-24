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

  <div>
    @foreach ($feeds as $feedGroup)
        <h4 class="fst-italic">{{ $feedGroup['label'] }}</h4>
        @foreach($feedGroup['newsgroup'] as $feed)
            <h5 class="fst-italic">{{ $feed['label']  }}</h5>
            <ul class="list-unstyled mb-0 ps-2">
                @foreach ($feed['feeds'] as $fd)
                    <li>
                        <i class="fa fa-rss"></i> <a href="/feed/{{ $feedGroup['slug'] }}/{{ $feed['slug'] }}/{{ $fd['slug'] }}">
                            {{ $fd['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    @endforeach
  </div>
</div>
