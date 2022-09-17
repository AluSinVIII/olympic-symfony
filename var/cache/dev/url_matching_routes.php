<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/athlete' => [[['_route' => 'app_athlete_index', '_controller' => 'App\\Controller\\AthleteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/athlete/new' => [[['_route' => 'app_athlete_new', '_controller' => 'App\\Controller\\AthleteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sport' => [[['_route' => 'app_sport_index', '_controller' => 'App\\Controller\\SportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sport/new' => [[['_route' => 'app_sport_new', '_controller' => 'App\\Controller\\SportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/viewsports' => [[['_route' => 'app_viewsports_index', '_controller' => 'App\\Controller\\ViewSportsController::index'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/athlete/([^/]++)(?'
                    .'|(*:62)'
                    .'|/edit(*:74)'
                    .'|(*:81)'
                .')'
                .'|/category/([^/]++)(?'
                    .'|(*:110)'
                    .'|/edit(*:123)'
                    .'|(*:131)'
                .')'
                .'|/sport/([^/]++)(?'
                    .'|(*:158)'
                    .'|/edit(*:171)'
                    .'|(*:179)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'app_athlete_show', '_controller' => 'App\\Controller\\AthleteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_athlete_edit', '_controller' => 'App\\Controller\\AthleteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [[['_route' => 'app_athlete_delete', '_controller' => 'App\\Controller\\AthleteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        110 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        131 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        158 => [[['_route' => 'app_sport_show', '_controller' => 'App\\Controller\\SportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => 'app_sport_edit', '_controller' => 'App\\Controller\\SportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        179 => [
            [['_route' => 'app_sport_delete', '_controller' => 'App\\Controller\\SportController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
