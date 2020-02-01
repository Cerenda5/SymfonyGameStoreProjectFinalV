<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/editor' => [[['_route' => 'editor', '_controller' => 'App\\Controller\\EditorController::index'], null, null, null, true, false, null]],
        '/editor/new' => [[['_route' => 'editor_add', '_controller' => 'App\\Controller\\EditorController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null]],
        '/user/new' => [[['_route' => 'user_add', '_controller' => 'App\\Controller\\UserController::add'], null, null, null, false, false, null]],
        '/videogame' => [[['_route' => 'videogame', '_controller' => 'App\\Controller\\VideoGameController::index'], null, null, null, true, false, null]],
        '/videogame/new' => [[['_route' => 'videogame_add', '_controller' => 'App\\Controller\\VideoGameController::add'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/editor/(?'
                    .'|edit/([^/]++)(*:193)'
                    .'|delete/([^/]++)(*:216)'
                .')'
                .'|/user/(?'
                    .'|edit/([^/]++)(*:247)'
                    .'|delete/([^/]++)(*:270)'
                .')'
                .'|/videogame/(?'
                    .'|see/([^/]++)(*:305)'
                    .'|edit/([^/]++)(*:326)'
                    .'|delete/([^/]++)(*:349)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'editor_edit', '_controller' => 'App\\Controller\\EditorController::edit'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'editor_delete', '_controller' => 'App\\Controller\\EditorController::delete'], ['id'], null, null, false, true, null]],
        247 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'videogame_see', '_controller' => 'App\\Controller\\VideoGameController::see'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'videogame_edit', '_controller' => 'App\\Controller\\VideoGameController::edit'], ['id'], null, null, false, true, null]],
        349 => [
            [['_route' => 'videogame_delete', '_controller' => 'App\\Controller\\VideoGameController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
