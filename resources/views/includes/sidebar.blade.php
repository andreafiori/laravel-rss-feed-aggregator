<div class="position-sticky">

    @php
        $routeName = Route::currentRouteName();
        $params = Route::current()->parameters();
    @endphp

    <div class="sidebar-menu">
        <ul class="list-unstyled">
            <li class="menu-item">
                <h5 class="fw-bold fst-italic"><a href="{{ route('home') }}" title="Back to the home page">Home</a></h5>
            </li>

            @foreach ($feeds as $groupIndex => $feedGroup)
                <li class="menu-group">
                    <h5 class="fw-bold fst-italic">{{ $feedGroup['label'] }}</h5>
                    <ul class="list-unstyled ps-3">
                        @foreach($feedGroup['newsgroup'] as $feedIndex => $feed)
                            @php
                                $collapseId = 'collapse-' . $groupIndex . '-' . $feedIndex;

                                // Check if any of the child feeds are active
                                $isActiveGroup = false;
                                foreach ($feed['feeds'] as $fd):
                                    if (Request::is("feed/{$feedGroup['slug']}/{$feed['slug']}/{$fd['slug']}")):
                                        $isActiveGroup = true;
                                        break;
                                    endif;
                                endforeach
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
                                                    href="{{ url('feed', [ 'category' => $feedGroup['slug'], 'group' => $feed['slug'], 'feedSlug' => $fd['slug'] ]) }}"
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
