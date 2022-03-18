<?php

$events->afterBuild(App\Listeners\GenerateSitemap::class);

App\Listeners\AddArchivePages::register( $container );