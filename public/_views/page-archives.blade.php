@extends( '_views.templates.main' )

@section( 'body' ) 
<section id="content" class="site-content">
    <div class="content-area">
        <article clsss="archives">
            <header class="entry-header">
                <h1 class="entry-title">{{ $page->title }}</h1>
            </header>
            <div class="entry-content">
                @yield( 'content' )
            </div>
        </article>
        <div class="archive-content">
            <?php $current_year = $current_month = $current_day = ''; ?>
            <?php foreach ( $posts as $post ) :
                $timestamp = is_numeric( $post->date ) ? $post->date : strtotime( $post->date );

                // Get the post's year and month. We need this to compare it with the previous post date.
                $year   = date( 'Y', $timestamp );
                $month  = date( 'm', $timestamp );
                $daynum = date( 'd', $timestamp );

                // If the current date doesn't match this post's date, we need extra formatting.
                if ( $current_year !== $year || $current_month !== $month ) :

                    // Close the list if this isn't the first post.
                    if ( $current_month && $current_year ) :
                        echo '</ul>';
                    endif;

                    // Set the current year and month to this post's year and month.
                    $current_year  = $year;
                    $current_month = $month;
                    $current_day   = '';

                    printf(
                        '<h2 class="archives__heading">%s</h2>',
                        date( 'F Y', $timestamp )
                    );

                    // Open a new unordered list.
                    echo '<ul class="archives__list list-none p-0">';
                endif;

                $day = '<span class="archives__day w-10 text-gray-500 font-mono">' . e( $daynum ) . ':</span>';

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

            endforeach ?>
            </ul>
        </div>
    </div>
</section>
@endsection