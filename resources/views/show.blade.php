@extends('layouts.app')

@section('title', 'Feeds details')

@section('content')
    <!-- Feed details template -->
    <h1><?php echo $data->get_title(); ?></h1>
    <p><?php echo $data->get_description(); ?></p>

    <div class="row">
        @foreach($data->get_items(0, 50) as $item)
            <div class="col-4">
                <div class="border me-2 mb-2 p-2">
                    <h4>
                        <a href="{{ $item->get_permalink() }}" class="icon-link icon-link-hover" target="_blank" title="">
                            {{ $item->get_title() }}
                        </a>
                    </h4>

                    <div>
                        <?= $item->get_description(); ?>
                    </div>

                    <div><small>Posted on <?= $item->get_date('j F Y | g:i a'); ?></small></div>

                    <div class="text-center mt-2">
                        <a href="#" class="icon-link gap-1 icon-link-hover">
                            Continue reading
                            <!-- <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> -->
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
