@extends( '_views.templates.main' )

@section( 'body' )
    <section id="content" class="site-content">
        <div class="content-area">
            <article class="post">
                <header class="entry-header">
                    <div class="entry-metadata">
                        <span class="entry-date">{{ $page->getDate()->format( 'F d, Y' ) }}</span>
                    </div>
                    <h1 class="entry-title">{{ $page->title }}</h1>
                </header>
                <div class="entry-content">
                    @yield( 'content' )
                </div>
                <div class="entry-footer">
                    Topics:
                    @foreach ($page->categories as $category )
                        <a href="/category/{{ $category }}">#{{ $category }}</a> 
                    @endforeach
                </div>
            </article>
        </div>
    </section>
@endsection