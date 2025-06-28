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

    <div class="sidebar-menu">
        <ul class="list-unstyled">
            @foreach ($feeds as $groupIndex => $feedGroup)
                <li class="menu-group">
                    <h5 class="fw-bold fst-italic">{{ $feedGroup['label'] }}</h5>
                    <ul class="list-unstyled ps-3">
                        @foreach($feedGroup['newsgroup'] as $feedIndex => $feed)
                            @php
                                $collapseId = 'collapse-' . $groupIndex . '-' . $feedIndex;

                                // Check if any of the child feeds are active
                                $isActiveGroup = false;
                                foreach ($feed['feeds'] as $fd) {
                                    if (Request::is("feed/{$feedGroup['slug']}/{$feed['slug']}/{$fd['slug']}")) {
                                        $isActiveGroup = true;
                                        break;
                                    }
                                }
                            @endphp

                            <li class="menu-subgroup">
                                <!-- Toggle Link -->
                                <a
                                    class="d-block fst-italic text-decoration-none {{ $isActiveGroup ? 'fw-semibold' : '' }}"
                                    data-bs-toggle="collapse"
                                    href="#{{ $collapseId }}"
                                    role="button"
                                    aria-expanded="{{ $isActiveGroup ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}"
                                >
                                    {{ $feed['label'] }}
                                </a>

                                <!-- Collapsible Group -->
                                <div class="collapse {{ $isActiveGroup ? 'show' : '' }}" id="{{ $collapseId }}">
                                    <ul class="list-unstyled ps-3 mt-1">
                                        @foreach ($feed['feeds'] as $fd)
                                            @php
                                                $isActive = Request::is("feed/{$feedGroup['slug']}/{$feed['slug']}/{$fd['slug']}");
                                            @endphp
                                            <li class="menu-item">
                                                <i class="fa fa-rss"></i>
                                                <a
                                                    href="/feed/{{ $feedGroup['slug'] }}/{{ $feed['slug'] }}/{{ $fd['slug'] }}"
                                                    class="{{ $isActive ? 'active text-primary fw-bold' : '' }}"
                                                >
                                                    {{ $fd['label'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>



</div>
