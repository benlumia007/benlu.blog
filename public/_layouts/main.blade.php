<?php
/**
 * Default home template
 * 
 * @package   Individuality
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2014-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<!doctype html>
<html>
<head>
    <title>{{ $page->siteName }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix( 'css/screen.css', 'assets/scripts' ) }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&family=Merriweather:wght@400;700&family=Tangerine&display=swap" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
    <section id="container" class="site-container">
        <header id="masthead" class="site-header">
            <div class="branding-navigation">
                <div class="site-branding">
                    <h1 class="site-title"><a href="/">{{ $page->siteTitle }}</a></h1>
                    <span class="site-description">{{ $page->siteTagline }}</span>
                </div>
                <nav id="primary" class="menu-primary">
                    <button class="menu-toggle"><?= e( 'Menu' ); ?></button>
                    <ul class="menu-items">
                        @foreach ( $page->primaryMenu as $menu )
                            <li class="menu-item"><a class="{{ $page->selected( str_replace( '/','', $menu->link ) ) }}" href="{{ $menu->link }}">{{ $menu->title }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </header>
        @yield( 'body' )
        <footer id="footer" class="site-footer">
            <div class="site-info">
                Powered by <a href="https://jigsaw.tighten.com" target="_blank">Jigsaw</a> and heart
            </div>
        </footer>
    </section>
    <script rel="javascript" src="{{ mix( 'js/app.js', 'assets/scripts' ) }}"></script>
</body>
</html>