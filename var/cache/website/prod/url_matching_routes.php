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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'sulu_media.website.image.proxy', '_controller' => 'sulu_media.media_stream_controller::getImageAction', '_requestAnalyzer' => false], ['slug'], null, null, false, true, null]],
        63 => [[['_route' => 'sulu_media.website.media.download', '_controller' => 'sulu_media.media_stream_controller::downloadAction', '_requestAnalyzer' => false], ['id', 'slug'], null, null, false, true, null]],
        106 => [[['_route' => 'sulu_media.website.media.download_admin', '_controller' => 'sulu_media.media_stream_controller:downloadAction', '_requestAnalyzer' => false], ['id', 'slug'], null, null, false, true, null]],
        145 => [[['_route' => 'sulu_search.website_search', '_controller' => 'sulu_search.controller.website_search::queryAction', '_format' => 'html'], ['prefix', '_format'], null, null, false, true, null]],
        188 => [[['_route' => 'sulu_website.paginated_sitemap', '_controller' => 'sulu_website.sitemap_controller::sitemapPaginatedAction'], ['alias', 'page'], null, null, false, false, null]],
        211 => [
            [['_route' => 'sulu_website.sitemap', '_controller' => 'sulu_website.sitemap_controller::sitemapAction'], ['alias'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
