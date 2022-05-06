<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/sitemap.xml' => [[['_route' => 'sulu_website.sitemap_index', '_controller' => 'sulu_website.sitemap_controller::indexAction'], null, null, null, false, false, null]],
        '/_sulu_segment_switch' => [[['_route' => 'sulu_website.segment_switch', '_controller' => 'sulu_website.segment_controller::switchAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/uploads/media/(.*)(*:26)'
                .'|/media/(\\d+)/download/([^/]++)(*:63)'
                .'|/admin/media/(\\d+)/download/([^/]++)(*:106)'
                .'|/((?:^$)?)search(?:\\.([^/]++))?(*:145)'
                .'|/sitemaps/(?'
                    .'|([^/\\-]++)\\-(\\d+)\\.xml(*:188)'
                    .'|([^/\\.]++)\\.xml(*:211)'
                .')'
                .'|/((?:^$)?)_error/(\\d+)(?:\\.([^/]++))?(*:257)'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:282)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:328)'
                            .'|router(*:342)'
                            .'|exception(?'
                                .'|(*:362)'
                                .'|\\.css(*:375)'
                            .')'
                        .')'
                        .'|(*:385)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'sulu_media.website.image.proxy', '_controller' => 'sulu_media.media_stream_controller::getImageAction', '_requestAnalyzer' => false], ['slug'], null, null, false, true, null]],
        63 => [[['_route' => 'sulu_media.website.media.download', '_controller' => 'sulu_media.media_stream_controller::downloadAction', '_requestAnalyzer' => false], ['id', 'slug'], null, null, false, true, null]],
        106 => [[['_route' => 'sulu_media.website.media.download_admin', '_controller' => 'sulu_media.media_stream_controller:downloadAction', '_requestAnalyzer' => false], ['id', 'slug'], null, null, false, true, null]],
        145 => [[['_route' => 'sulu_search.website_search', '_controller' => 'sulu_search.controller.website_search::queryAction', '_format' => 'html'], ['prefix', '_format'], null, null, false, true, null]],
        188 => [[['_route' => 'sulu_website.paginated_sitemap', '_controller' => 'sulu_website.sitemap_controller::sitemapPaginatedAction'], ['alias', 'page'], null, null, false, false, null]],
        211 => [[['_route' => 'sulu_website.sitemap', '_controller' => 'sulu_website.sitemap_controller::sitemapAction'], ['alias'], null, null, false, false, null]],
        257 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['prefix', 'code', '_format'], null, null, false, true, null]],
        282 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        328 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        342 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        362 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        375 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        385 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
