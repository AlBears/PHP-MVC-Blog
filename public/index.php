<?php
include(__DIR__."/../Bootstrap/start.php");
Dotenv::load(__DIR__.'/../');
include(__DIR__."/../Bootstrap/db.php");
include __DIR__.'/../routes.php';

$match = $router->match();

if (is_string($match['target']))
    list($controller, $method) = explode('@', $match['target']);

if (($controller != null) && (is_callable(array($controller, $method)))) {
    $object = new $controller();
    call_user_func_array(array($object, $method), array($match['params']));

} else if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
    
} else {
    echo "Cannot find $controller -> $method";
    exit();
}