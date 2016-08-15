<?php

$router->map('GET', '/', 'PageController@route', 'home');
$router->map('GET', '/[*]/[*]', 'PageController@twoLevelsRouting', 'post');
$router->map('GET', '/[*]', 'PageController@oneLevelRouting', 'posts');
