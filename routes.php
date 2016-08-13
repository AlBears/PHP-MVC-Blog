<?php

$router->map('GET', '/', 'PageController@getShowHomePage', 'home');
$router->map('GET', '/post', 'PageController@getShowPostPage', 'post');
$router->map('GET', '/posts', 'PageController@getShowPostsPage', 'posts');
$router->map('GET', '/base', 'PageController@getBaseTest', 'db');
