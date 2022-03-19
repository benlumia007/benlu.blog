<?php 

return [
    'build' => [
        'source' => 'public'
    ],

    // base url
    'baseUrl' => 'https://benlu.test',
    'production' => false,

    // A custom title for the site.
    'siteTitle' => 'Benjamin Lu',

    // A custom tagline for the site.
    'siteTagline' => '',

    // A custom primary menu for the site.
    'primaryMenu' => [
        [
            'link'  => '/about',
            'title' => 'About'
        ],
        [
            'link'  => '/archives',
            'title' => 'Archives'
        ],
    ],

    'collections' => [
        'posts' => [
            'extends' => '_views.single',
            'section' => 'content',
            'author' => 'Benjamin Lu',
            'path' => 'archives/{date|Y/m/d}/{-title}',
            'sort' => '-date',
            'getDate' => function( $page ) {
                return Datetime::createFromFormat( 'U', $page->date );
            },
            'hasCategory' => function ( $page, $category ) {
                return collect( $page->categories )->contains( $category );
            },
        ],
        'categories' => [
            'extends' => '_views.category',
            'section' => 'content',
            'path' => '/category/{filename}',
            'name' => function( $page ) {
                return $page->getFilename();
            }
        ],
    ],
];