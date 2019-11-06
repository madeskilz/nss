<?php

if(! defined('ENVIRONMENT') )
{
    $domain = strtolower($_SERVER['HTTP_HOST']);

    switch($domain) {
        case 'northsouthsecurity.net' :
        case 'www.northsouthsecurity.net':
            define('ENVIRONMENT', 'production');
            break;
        default :
            define('ENVIRONMENT', 'development');
            break;
    }
}