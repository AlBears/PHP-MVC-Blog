<?php

$router->map('GET', '/', 'PageController@getShowHomePage', 'home');
$router->map('GET', '/post/[*]', 'PageController@getShowPostPage', 'post');
$router->map('GET', '/posts', 'PageController@getShowAllCategoriesPage', 'posts');
$router->map('GET', '/category/[*]', 'PageController@getShowPostsPage', 'categories');
$router->map('GET', '/base', 'PageController@getBaseTest', 'db');
