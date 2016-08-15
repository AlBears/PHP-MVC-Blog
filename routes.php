<?php

$router->map('GET', '/', 'PageController@getRoute', 'home');
$router->map('GET', '/[*]/[*]', 'PageController@getTwoLevelsRouting', 'post');
$router->map('GET', '/[*]', 'PageController@getOneLevelRouting', 'posts');
