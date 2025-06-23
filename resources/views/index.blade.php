@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <!-- Feed details template -->
    <h1><?php echo $data->get_title(); ?></h1>
    <p><?php echo $data->get_description(); ?></p>

    <div class="row">
        @foreach($data->get_items(0, 50) as $item)
            <div class="col-4">
                <div class="border me-2 mb-2 p-2">
                    <a href="{{ $item->get_permalink() }}" target="_blank" title="">
                        {{ $item->get_title() }}
                    </a>

                    <p><?php    echo $item->get_description(); ?></p>
                    <div><small>Posted on <?php    echo $item->get_date('j F Y | g:i a'); ?></small></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
