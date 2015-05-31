<?php

$router->bind('songs', function($slug)
{
    return App\Song::whereSlug($slug)->first();
});

$router->resource('songs', 'SongsController');