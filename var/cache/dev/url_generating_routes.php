<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_athlete_index' => [[], ['_controller' => 'App\\Controller\\AthleteController::index'], [], [['text', '/athlete/']], [], [], []],
    'app_athlete_new' => [[], ['_controller' => 'App\\Controller\\AthleteController::new'], [], [['text', '/athlete/new']], [], [], []],
    'app_athlete_show' => [['id'], ['_controller' => 'App\\Controller\\AthleteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/athlete']], [], [], []],
    'app_athlete_edit' => [['id'], ['_controller' => 'App\\Controller\\AthleteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/athlete']], [], [], []],
    'app_athlete_delete' => [['id'], ['_controller' => 'App\\Controller\\AthleteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/athlete']], [], [], []],
    'app_category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], [], []],
    'app_category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'app_category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_sport_index' => [[], ['_controller' => 'App\\Controller\\SportController::index'], [], [['text', '/sport/']], [], [], []],
    'app_sport_new' => [[], ['_controller' => 'App\\Controller\\SportController::new'], [], [['text', '/sport/new']], [], [], []],
    'app_sport_show' => [['id'], ['_controller' => 'App\\Controller\\SportController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sport']], [], [], []],
    'app_sport_edit' => [['id'], ['_controller' => 'App\\Controller\\SportController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/sport']], [], [], []],
    'app_sport_delete' => [['id'], ['_controller' => 'App\\Controller\\SportController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sport']], [], [], []],
    'app_viewsports_index' => [[], ['_controller' => 'App\\Controller\\ViewSportsController::index'], [], [['text', '/viewsports/']], [], [], []],
];
