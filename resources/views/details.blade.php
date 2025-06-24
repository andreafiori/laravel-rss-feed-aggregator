@extends('layouts.app')

@section('title', 'Feeds details')

@section('sidebar_content')
    <!-- Feed details template -->
    <h1><?php echo strip_tags( $data->get_title() ); ?></h1>
    <p><?php echo strip_tags( $data->get_description() ); ?></p>

    <div class="mb-2">
        <?php if (isset($feed['website']) && !empty($feed['website'])): ?>
            <a href="<?php echo $feed['website'] ?>" target="_blank" rel="noopener" class="btn btn-sm btn-primary"><i class="fa fa-globe"></i> Website</a>
        <?php endif; ?>

        <?php if (isset($feed['twitter']) && !empty($feed['twitter'])): ?>
            <a href="<?php echo $feed['twitter'] ?>" target="_blank" rel="noopener" class="btn btn-sm btn-info"><i class="fa fa-globe"></i> Twitter</a>
        <?php endif; ?>

        <?php if (isset($feed['linkedin']) && !empty($feed['linkedin'])): ?>
            <a href="<?php echo $feed['linkedin'] ?>" target="_blank" rel="noopener" class="btn btn-sm  btn-primary"><i class="fa fa-globe"></i> Linkedin</a>
        <?php endif; ?>

        <?php if (isset($feed['facebook']) && !empty($feed['facebook'])): ?>
            <a href="<?php echo $feed['facebook'] ?>" target="_blank" rel="noopener" class="btn btn-sm  btn-info"><i class="fab fa-facebook-f"></i> Facebook</a>
        <?php endif; ?>

        <?php if (isset($feed['youtube']) && !empty($feed['youtube'])): ?>
            <a href="<?php echo $feed['youtube'] ?>" target="_blank" rel="noopener" class="btn btn-sm  btn-danger"><i class="fab fa-youtube"></i> Youtube</a>
        <?php endif; ?>

        <?php if (isset($feed['github']) && !empty($feed['github'])): ?>
            <a href="<?php echo $feed['github'] ?>" target="_blank" rel="noopener" class="btn btn-sm  btn-ternary"><i class="fab fa-github"></i> Github</a>
        <?php endif; ?>
    </div>

    <div class="row">
        @foreach($data->get_items(0, 50) as $item)
            <div class="col-4">
                <div class="border me-2 mb-2 p-2">
                    <h4>
                        <a href="{{ $item->get_permalink() }}" class="icon-link icon-link-hover" target="_blank" title="">
                            {{ strip_tags( $item->get_title() ) }}
                        </a>
                    </h4>

                    <div style="word-wrap: break-word;">
                        <?= mb_strimwidth(strip_tags($item->get_description()), 0, 150, '...'); ?>
                    </div>

                    <div class="mt-2"><small>Posted on <?= $item->get_date('j F Y | g:i a'); ?></small></div>

                    <!-- <div class="text-center mt-2">
                        <a href="#" class="icon-link gap-1 icon-link-hover">
                            Continue reading
                        </a>
                    </div> -->

                </div>
            </div>
        @endforeach
    </div>
@endsection
