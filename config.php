<?php 

return [
    'build' => [
        'source' => 'public'
    ],

    // A custom title for the site.
    'siteTitle' => 'Benjamin Lu',

    // A custom tagline for the site.
    'siteTagline' => 'PHP Developer',

    // A custom primary menu for the site.
    'primaryMenu' => [
        [
            'link' => '/about-me',
            'title' => 'About Me'
        ]
    ],

    'collections' => [
        'posts' => [
            'author' => 'Benjamin Lu',
            'path'  => 'blog/{-title}',
            'sort' => 'date',
            'getDate' => function( $page ) {
                return Datetime::createFromFormat( 'U', $page->date );
            },
            'hasCategory' => function ( $page, $category ) {
                return collect( $page->categories )->contains( $category );
            },
        ],
    ],
];