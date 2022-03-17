@extends( '_layouts.main' )

@section( 'body' )
<section id="content" class="site-content">
    <div class="content-area">
        <div class="archive-header">
            <h1 class="archive-title">{{ \Carbon\Carbon::createFromDate($page->year, $page->month, $page->day, 1)->format('F m, Y') }}</h1>
        </div>
        @foreach ( $page->getPostsForYear( $posts ) as $post )
            <article class="post">
                <header class="entry-header">
                    <h1 class="entry-title"><a href="{{ $post->getUrl() }}">{{ $post->title }}</a></h1>
                </header>
                <div class="entry-content">
                    <p>
                        {!! $post->getExcerpt() !!}
                    </p>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection