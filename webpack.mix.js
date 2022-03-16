const mix = require( 'laravel-mix' );
require( 'laravel-mix-jigsaw' )

/*
 * Sets the path to the generated assets. By default, this is the `/public` folder in the theme.
 */
mix.setPublicPath( 'public/assets/scripts' );

/*
 * Compile JavaScript.
 *
 * @link https://laravel.com/docs/5.6/mix#working-with-scripts
 */
mix.jigsaw()
    .js( `resources/js/app.js`, 'js' )
    .sass( `resources/scss/screen.scss`, 'css' )
    .options( {
        processCssUrls: false,
    } )