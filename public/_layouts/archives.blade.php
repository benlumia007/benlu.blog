@extends( '_layouts.main' )

@section( 'body' ) 
<section id="content" class="site-content">
    <div class="content-area">
        <h1>{{ $page->title }}</h1>
        @foreach ( $posts as $post )
            <?php
                $current_year = $current_month = $current_day = '';
                
                $timestamp = is_numeric( $post->date ) ? $post->date : strtotime( $post->date );

                $year  = date( 'Y', $timestamp );
                $month = date( 'm', $timestamp );
                $daynum   = date( 'd', $timestamp );

                if ( $current_year !== $year || $current_month !== $month ) : 
                    $current_year  = $year;
                    $current_month = $month;
                    $current_day   = '';

                    printf(
                        '<h2 class="archives__heading">%s</h2>',
                        date( 'F Y', $timestamp )
                    );

                    echo '<ul class="archives__list list-none p-0">';
                endif;

                $day = '<span class="archives__day w-10 text-gray-500 font-mono">' . $daynum . ':</span>';

                // Check if there's a duplicate day so we can add a class.
                $duplicate_day = $current_day && $daynum === $current_day ? ' day-duplicate' : '';
                $current_day   = $daynum;

                printf(
                    '<li class="archives__item flex flex-nowrap items-start justify-left ml-2 %s">%s <span class="archives__post ml-2"><a href="%s" rel="bookmark">%s</a></span></li>',
                    $duplicate_day,
                    $day,
                    $post->getUrl(),
                    $post->title,
                );
                echo '</ul>'
            ?>
        @endforeach
    </div>
</section>
@endsection