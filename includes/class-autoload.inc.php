<?php

spl_autoload_register('autoLoad');

function autoLoad ($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $path = 'classes/';

    if (strpos($url, 'includes')) {
    $path = '../classes/';
    }

    $ext = '.class.php';
    require_once $path . $className . $ext;
}
