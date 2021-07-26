<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/temperature' => [[['_route' => 'temperature', '_controller' => 'App\\Controller\\ClientController::getTemperature'], null, ['GET' => 0], null, false, false, null]],
        '/humidity' => [[['_route' => 'humidity', '_controller' => 'App\\Controller\\ClientController::getHumidity'], null, ['GET' => 0], null, false, false, null]],
        '/brightness' => [[['_route' => 'brightness', '_controller' => 'App\\Controller\\ClientController::getBrightness'], null, ['GET' => 0], null, false, false, null]],
        '/oo' => [[['_route' => 'oo', '_controller' => 'App\\Controller\\OoController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
