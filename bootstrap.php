<?php

$events->afterBuild(App\Listeners\GenerateSitemap::class);
$events->afterBuild(App\Listeners\GenerateIndex::class);

App\Listeners\AddArchivePages::register( $container );