@extends( '_views.templates.main' )

@section( 'body' )
<section id="content" class="site-content">
    <div class="content-area">
        <article class="page">
            <header class="entry-header">
                <h1 class="entry-title">{{ $page->title }}</a></h1>
            </header>
            <div class="entry-content">
                @yield( 'content' )
            </div>
            <ul>
                @foreach ( $posts->filter->hasCategory( $page->name() ) as $post )
                    <li><a href="{{ $post->getPath() }}">{{ $post->title }}</a></li>
                @endforeach
            </ul>
        </article>
    </div>
</section>
@endsection