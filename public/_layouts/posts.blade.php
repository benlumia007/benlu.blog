@extends( '_layouts.main' )

@section( 'body' )
    <section id="content" class="site-content">
        <div class="content-area">
        <article class="post">
                    <header class="entry-header">
                        <div class="entry-metadata">
                            <span class="entry-date">{{ $page->getDate()->format( 'F d, Y' ) }}</span>
                        </div>
                        <h1 class="entry-title"><a href="{{ $page->getUrl() }}">{{ $page->title }}</a></h1>
                    </header>
                    <div class="entry-content">
                        @yield( 'content' )
                    </div>
                </article>
        </div>
    </section>
@endsection