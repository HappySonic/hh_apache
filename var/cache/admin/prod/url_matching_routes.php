<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'sulu_admin', '_controller' => 'sulu_admin.admin_controller::indexAction'], null, null, null, true, false, null]],
        '/admin/config' => [[['_route' => 'sulu_admin.config', '_controller' => 'sulu_admin.admin_controller::configAction'], null, null, null, false, false, null]],
        '/admin/translations' => [[['_route' => 'sulu_admin.translation', '_controller' => 'sulu_admin.admin_controller::translationsAction'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'sulu_admin.login_check'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'sulu_admin.logout'], null, null, null, false, false, null]],
        '/admin/security/reset/email' => [[['_route' => 'sulu_security.reset_password.email', '_controller' => 'sulu_security.resetting_controller::sendEmailAction'], null, null, null, false, false, null]],
        '/admin/security/reset' => [[['_route' => 'sulu_security.reset_password.reset', '_controller' => 'sulu_security.resetting_controller::resetAction'], null, null, null, false, false, null]],
        '/admin/location/geolocator' => [[['_route' => 'sulu_location.geolocator_query', '_controller' => 'sulu_location.controller.geolocator::queryAction'], null, null, null, false, false, null]],
        '/admin/website/cache' => [[['_route' => 'sulu_website.cache.remove', '_controller' => 'sulu_website.cache_controller::clearAction'], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/preview/start' => [[['_route' => 'sulu_preview.start', '_controller' => 'sulu_preview.preview_controller::startAction'], null, null, null, false, false, null]],
        '/admin/preview/render' => [[['_route' => 'sulu_preview.render', '_controller' => 'sulu_preview.preview_controller::renderAction'], null, null, null, false, false, null]],
        '/admin/preview/update' => [[['_route' => 'sulu_preview.update', '_controller' => 'sulu_preview.preview_controller::updateAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/preview/update-context' => [[['_route' => 'sulu_preview.update-context', '_controller' => 'sulu_preview.preview_controller::updateContextAction'], null, null, null, false, false, null]],
        '/admin/preview/stop' => [[['_route' => 'sulu_preview.stop', '_controller' => 'sulu_preview.preview_controller::stopAction'], null, null, null, false, false, null]],
        '/admin/search/indexes' => [[['_route' => 'sulu_search_indexes', '_controller' => 'sulu_search.controller.search::indexesAction', '_format' => 'json'], null, null, null, false, false, null]],
        '/admin/search/query' => [[['_route' => 'sulu_search_search', '_controller' => 'sulu_search.controller.search::searchAction', '_format' => 'json'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|js/routing(?:\\.(js|json))?(*:43)'
                    .'|api/(?'
                        .'|t(?'
                            .'|ags(?'
                                .'|/([^/\\.]++)(?:\\.(json|csv))?(*:95)'
                                .'|(?:\\.(json|csv))?(?'
                                    .'|(*:122)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                    .'|(*:162)'
                                .')'
                                .'|(?:\\.(json|csv))?(*:188)'
                                .'|/merge(?:\\.(json|csv))?(*:219)'
                            .')'
                            .'|easers(?:\\.(json|csv))?(*:251)'
                            .'|rash\\-items(?'
                                .'|(?:\\.(json|csv))?(*:290)'
                                .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                    .'|(*:329)'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|o(?'
                                .'|ll(?'
                                    .'|aborations(?:\\.(json|csv))?(?'
                                        .'|(*:383)'
                                    .')'
                                    .'|ections(?'
                                        .'|/([^/\\.]++)(?:\\.(json|csv))?(*:430)'
                                        .'|(?:\\.(json|csv))?(?'
                                            .'|(*:458)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                            .'|(*:498)'
                                        .')'
                                    .')'
                                .')'
                                .'|ntact(?'
                                    .'|s(?'
                                        .'|(?:\\.(json|csv))?(*:538)'
                                        .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                            .'|(*:577)'
                                        .')'
                                        .'|(?:\\.(json|csv))?(*:603)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.(json|csv))?(?'
                                                .'|(*:645)'
                                            .')'
                                            .'|([^/]++)/medias(?'
                                                .'|/([^/\\.]++)(?:\\.(json|csv))?(*:700)'
                                                .'|(?:\\.(json|csv))?(?'
                                                    .'|(*:728)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|\\-(?'
                                        .'|titles(?'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:782)'
                                            .'|(?:\\.(json|csv))?(?'
                                                .'|(*:810)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:847)'
                                            .'|(?:\\.(json|csv))?(*:872)'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:908)'
                                            .'|(?:\\.(json|csv))?(*:933)'
                                        .')'
                                        .'|positions(?'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:982)'
                                            .'|(?:\\.(json|csv))?(?'
                                                .'|(*:1010)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:1048)'
                                            .'|(?:\\.(json|csv))?(*:1074)'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:1111)'
                                            .'|(?:\\.(json|csv))?(*:1137)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ategories(?'
                                .'|/([^/\\.]++)(?:\\.(json|csv))?(*:1190)'
                                .'|(?:\\.(json|csv))?(?'
                                    .'|(*:1219)'
                                .')'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.(json|csv))?(?'
                                        .'|(*:1263)'
                                    .')'
                                    .'|([^/]++)/keywords(?'
                                        .'|(?:\\.(json|csv))?(?'
                                            .'|(*:1313)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                            .'|(*:1354)'
                                        .')'
                                        .'|(?:\\.(json|csv))?(*:1381)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ac(?'
                            .'|counts(?'
                                .'|/([^/]++)/(?'
                                    .'|contacts(?'
                                        .'|(?:\\.(json|csv))?(*:1449)'
                                        .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                            .'|(*:1489)'
                                            .'|(*:1498)'
                                        .')'
                                    .')'
                                    .'|addresses(?:\\.(json|csv))?(*:1535)'
                                .')'
                                .'|(?:\\.(json|csv))?(?'
                                    .'|(*:1565)'
                                .')'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.(json|csv))?(?'
                                        .'|(*:1609)'
                                    .')'
                                    .'|multipledeleteinfo(?:\\.(json|csv))?(*:1654)'
                                    .'|([^/]++)/deleteinfo(?:\\.(json|csv))?(*:1699)'
                                    .'|([^/\\.]++)(?:\\.(json|csv))?(*:1735)'
                                    .'|([^/]++)/medias(?'
                                        .'|/([^/\\.]++)(?:\\.(json|csv))?(*:1790)'
                                        .'|(?:\\.(json|csv))?(?'
                                            .'|(*:1819)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|tivities(?:\\.(json|csv))?(*:1857)'
                        .')'
                        .'|r(?'
                            .'|o(?'
                                .'|les(?'
                                    .'|(?:\\.(json|csv))?(*:1898)'
                                    .'|/([^/\\.]++)(?:\\.(json|csv))?(*:1935)'
                                    .'|(?:\\.(json|csv))?(*:1961)'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.(json|csv))?(?'
                                            .'|(*:2004)'
                                        .')'
                                        .'|([^/]++)/settings/([^/\\.]++)(?:\\.(json|csv))?(?'
                                            .'|(*:2062)'
                                        .')'
                                    .')'
                                .')'
                                .'|utes(?:\\.(json|csv))?(?'
                                    .'|(*:2098)'
                                .')'
                            .')'
                            .'|esourcelocators(?:\\.(json|csv))?(*:2141)'
                        .')'
                        .'|groups(?'
                            .'|(?:\\.(json|csv))?(*:2177)'
                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:2214)'
                            .'|(?:\\.(json|csv))?(*:2240)'
                            .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                .'|(*:2280)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:2327)'
                            .'|(?:\\.(json|csv))?(*:2353)'
                            .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                .'|(*:2393)'
                            .')'
                            .'|(?:\\.(json|csv))?(*:2420)'
                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:2457)'
                        .')'
                        .'|p(?'
                            .'|ermissions(?:\\.(json|csv))?(?'
                                .'|(*:2501)'
                            .')'
                            .'|r(?'
                                .'|ofile(?'
                                    .'|(?:\\.(json|csv))?(?'
                                        .'|(*:2543)'
                                    .')'
                                    .'|/settings(?:\\.(json|csv))?(?'
                                        .'|(*:2582)'
                                    .')'
                                .')'
                                .'|eview\\-links/(?'
                                    .'|([^/\\.]++)(?:\\.(json|csv))?(*:2636)'
                                    .'|([^/]++)/triggers(?:\\.(json|csv))?(*:2679)'
                                    .'|([^/\\.]++)(?:\\.(json|csv))?(*:2715)'
                                .')'
                            .')'
                            .'|ages(?'
                                .'|/(?'
                                    .'|resourcelocators/generates(?:\\.(json|csv))?(*:2780)'
                                    .'|([^/]++)/resourcelocators(?:\\.(json|csv))?(?'
                                        .'|(*:2834)'
                                    .')'
                                    .'|([^/\\.]++)(?:\\.(json|csv))?(*:2871)'
                                .')'
                                .'|(?:\\.(json|csv))?(*:2898)'
                                .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                    .'|(*:2938)'
                                .')'
                                .'|(?:\\.(json|csv))?(*:2965)'
                                .'|/([^/\\.]++)(?:\\.(json|csv))?(*:3002)'
                            .')'
                        .')'
                        .'|s(?'
                            .'|ecurity\\-contexts(?:\\.(json|csv))?(?'
                                .'|(*:3054)'
                            .')'
                            .'|nippet(?'
                                .'|s(?'
                                    .'|(?:\\.(json|csv))?(*:3094)'
                                    .'|/([^/\\.]++)(?:\\.(json|csv))?(*:3131)'
                                    .'|(?:\\.(json|csv))?(*:3157)'
                                    .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                        .'|(*:3197)'
                                    .')'
                                .')'
                                .'|\\-areas(?'
                                    .'|(?:\\.(json|csv))?(*:3235)'
                                    .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                        .'|(*:3275)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|webspace(?'
                            .'|/localizations(?:\\.(json|csv))?(*:3330)'
                            .'|s(?'
                                .'|(?:\\.(json|csv))?(*:3360)'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.(json|csv))?(*:3400)'
                                    .'|([^/]++)/(?'
                                        .'|analytics(?'
                                            .'|(?:\\.(json|csv))?(*:3450)'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:3487)'
                                            .'|(?:\\.(json|csv))?(*:3513)'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                                .'|(*:3553)'
                                            .')'
                                            .'|(?:\\.(json|csv))?(*:3580)'
                                        .')'
                                        .'|custom\\-urls(?'
                                            .'|(?:\\.(json|csv))?(*:3622)'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:3659)'
                                            .'|(?:\\.(json|csv))?(*:3685)'
                                            .'|/([^/\\.]++)(?:\\.(json|csv))?(?'
                                                .'|(*:3725)'
                                            .')'
                                            .'|(?:\\.(json|csv))?(*:3752)'
                                            .'|/([^/]++)/routes(?:\\.(json|csv))?(?'
                                                .'|(*:3797)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|items(?:\\.(json|csv))?(*:3834)'
                        .'|media(?'
                            .'|/([^/\\.]++)(?:\\.(json|csv))?(*:3879)'
                            .'|(?:\\.(json|csv))?(?'
                                .'|(*:3908)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|csv))?(?'
                                    .'|(*:3952)'
                                .')'
                                .'|([^/]++)/versions/([^/\\.]++)(?:\\.(json|csv))?(*:4007)'
                                .'|([^/\\.]++)(?:\\.(json|csv))?(*:4043)'
                                .'|([^/]++)/(?'
                                    .'|preview(?:\\.(json|csv))?(?'
                                        .'|(*:4091)'
                                    .')'
                                    .'|formats(?'
                                        .'|(?:\\.(json|csv))?(*:4128)'
                                        .'|/([^/\\.]++)(?:\\.(json|csv))?(*:4165)'
                                        .'|(?:\\.(json|csv))?(*:4191)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|formats(?:\\.(json|csv))?(*:4228)'
                        .'|l(?'
                            .'|anguages(?:\\.(json|csv))?(*:4266)'
                            .'|ocalizations(?:\\.(json|csv))?(*:4304)'
                        .')'
                    .')'
                    .'|me(?'
                        .'|tadata/([^/]++)/([^/]++)(*:4344)'
                        .'|dia/(?'
                            .'|redirect/media/([^/]++)(*:4383)'
                            .'|(\\d+)/download/([^/]++)(*:4415)'
                        .')'
                    .')'
                    .'|p/([^/]++)(?'
                        .'|(*:4439)'
                        .'|/render(*:4455)'
                    .')'
                .')'
                .'|/uploads/media/(.*)(*:4485)'
                .'|/media/(\\d+)/download/([^/]++)(*:4524)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller:indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'sulu_tag.get_tag', '_controller' => 'sulu_tag.tag_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        122 => [
            [['_route' => 'sulu_tag.get_tags', '_controller' => 'sulu_tag.tag_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_tag.post_tag', '_controller' => 'sulu_tag.tag_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        162 => [
            [['_route' => 'sulu_tag.put_tag', '_controller' => 'sulu_tag.tag_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_tag.delete_tag', '_controller' => 'sulu_tag.tag_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        188 => [[['_route' => 'sulu_tag.patch_tags', '_controller' => 'sulu_tag.tag_controller::cpatchAction', '_format' => 'json'], ['_format'], ['PATCH' => 0], null, false, true, null]],
        219 => [[['_route' => 'sulu_tag.post_tag_merge', '_controller' => 'sulu_tag.tag_controller::postMergeAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        251 => [[['_route' => 'sulu_page.get_teasers', '_controller' => 'sulu_page.teaser_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        290 => [[['_route' => 'sulu_trash.get_trash-items', '_controller' => 'sulu_trash.trash_item_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        329 => [
            [['_route' => 'sulu_trash.get_trash-item', '_controller' => 'sulu_trash.trash_item_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_trash.delete_trash-item', '_controller' => 'sulu_trash.trash_item_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sulu_trash.post_trash-item_trigger', '_controller' => 'sulu_trash.trash_item_controller::postTriggerAction', '_format' => 'json'], ['id', '_format'], ['POST' => 0], null, false, true, null],
        ],
        383 => [
            [['_route' => 'sulu_admin.put_collaborations', '_controller' => 'sulu_admin.collaboration_controller::cputAction', '_format' => 'json'], ['_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_admin.delete_collaborations', '_controller' => 'sulu_admin.collaboration_controller::cdeleteAction', '_format' => 'json'], ['_format'], ['DELETE' => 0], null, false, true, null],
        ],
        430 => [[['_route' => 'sulu_media.get_collection', '_controller' => 'sulu_media.collection_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        458 => [
            [['_route' => 'sulu_media.get_collections', '_controller' => 'sulu_media.collection_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_media.post_collection', '_controller' => 'sulu_media.collection_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        498 => [
            [['_route' => 'sulu_media.put_collection', '_controller' => 'sulu_media.collection_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_media.delete_collection', '_controller' => 'sulu_media.collection_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sulu_media.post_collection_trigger', '_controller' => 'sulu_media.collection_controller::postTriggerAction', '_format' => 'json'], ['id', '_format'], ['POST' => 0], null, false, true, null],
        ],
        538 => [[['_route' => 'sulu_contact.get_contacts', '_controller' => 'sulu_contact.contact_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        577 => [
            [['_route' => 'sulu_contact.delete_contact', '_controller' => 'sulu_contact.contact_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.get_contact', '_controller' => 'sulu_contact.contact_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null],
        ],
        603 => [[['_route' => 'sulu_contact.post_contact', '_controller' => 'sulu_contact.contact_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        645 => [
            [['_route' => 'sulu_contact.put_contact', '_controller' => 'sulu_contact.contact_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.patch_contact', '_controller' => 'sulu_contact.contact_controller::patchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        700 => [[['_route' => 'sulu_contact.delete_contact_medias', '_controller' => 'sulu_contact.contact_media_controller::deleteAction', '_format' => 'json'], ['contactId', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        728 => [
            [['_route' => 'sulu_contact.post_contact_medias', '_controller' => 'sulu_contact.contact_media_controller::postAction', '_format' => 'json'], ['contactId', '_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.cget_contact_medias', '_controller' => 'sulu_contact.contact_media_controller::cgetAction', '_format' => 'json'], ['contactId', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.get_contact_medias', '_controller' => 'sulu_contact.contact_media_controller::cgetAction', '_format' => 'json'], ['contactId', '_format'], ['GET' => 0], null, false, true, null],
        ],
        782 => [[['_route' => 'sulu_contact.get_contact-title', '_controller' => 'sulu_contact.contact_title_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        810 => [
            [['_route' => 'sulu_contact.get_contact-titles', '_controller' => 'sulu_contact.contact_title_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.post_contact-title', '_controller' => 'sulu_contact.contact_title_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        847 => [[['_route' => 'sulu_contact.put_contact-title', '_controller' => 'sulu_contact.contact_title_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        872 => [[['_route' => 'sulu_contact.delete_contact-titles', '_controller' => 'sulu_contact.contact_title_controller::cdeleteAction', '_format' => 'json'], ['_format'], ['DELETE' => 0], null, false, true, null]],
        908 => [[['_route' => 'sulu_contact.delete_contact-title', '_controller' => 'sulu_contact.contact_title_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        933 => [[['_route' => 'sulu_contact.patch_contact-titles', '_controller' => 'sulu_contact.contact_title_controller::cpatchAction', '_format' => 'json'], ['_format'], ['PATCH' => 0], null, false, true, null]],
        982 => [[['_route' => 'sulu_contact.get_contact-position', '_controller' => 'sulu_contact.position_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1010 => [
            [['_route' => 'sulu_contact.get_contact-positions', '_controller' => 'sulu_contact.position_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.post_contact-position', '_controller' => 'sulu_contact.position_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1048 => [[['_route' => 'sulu_contact.put_contact-position', '_controller' => 'sulu_contact.position_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        1074 => [[['_route' => 'sulu_contact.delete_contact-positions', '_controller' => 'sulu_contact.position_controller::cdeleteAction', '_format' => 'json'], ['_format'], ['DELETE' => 0], null, false, true, null]],
        1111 => [[['_route' => 'sulu_contact.delete_contact-position', '_controller' => 'sulu_contact.position_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        1137 => [[['_route' => 'sulu_contact.patch_contact-positions', '_controller' => 'sulu_contact.position_controller::cpatchAction', '_format' => 'json'], ['_format'], ['PATCH' => 0], null, false, true, null]],
        1190 => [[['_route' => 'sulu_category.get_category', '_controller' => 'sulu_category.category_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1219 => [
            [['_route' => 'sulu_category.get_categories', '_controller' => 'sulu_category.category_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_category.post_category', '_controller' => 'sulu_category.category_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1263 => [
            [['_route' => 'sulu_category.put_category', '_controller' => 'sulu_category.category_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_category.patch_category', '_controller' => 'sulu_category.category_controller::patchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'sulu_category.delete_category', '_controller' => 'sulu_category.category_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sulu_category.post_category_trigger', '_controller' => 'sulu_category.category_controller::postTriggerAction', '_format' => 'json'], ['id', '_format'], ['POST' => 0], null, false, true, null],
        ],
        1313 => [
            [['_route' => 'sulu_category.get_category_keywords', '_controller' => 'sulu_category.keyword_controller::cgetAction', '_format' => 'json'], ['categoryId', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_category.post_category_keyword', '_controller' => 'sulu_category.keyword_controller::postAction', '_format' => 'json'], ['categoryId', '_format'], ['POST' => 0], null, false, true, null],
        ],
        1354 => [
            [['_route' => 'sulu_category.get_category_keyword', '_controller' => 'sulu_category.keyword_controller::getAction', '_format' => 'json'], ['categoryId', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_category.put_category_keyword', '_controller' => 'sulu_category.keyword_controller::putAction', '_format' => 'json'], ['categoryId', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_category.delete_category_keyword', '_controller' => 'sulu_category.keyword_controller::deleteAction', '_format' => 'json'], ['categoryId', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1381 => [[['_route' => 'sulu_category.delete_category_keywords', '_controller' => 'sulu_category.keyword_controller::cdeleteAction', '_format' => 'json'], ['categoryId', '_format'], ['DELETE' => 0], null, false, true, null]],
        1449 => [[['_route' => 'sulu_contact.get_account_contacts', '_controller' => 'sulu_contact.account_controller::getContactsAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1489 => [[['_route' => 'sulu_contact.put_account_contacts', '_controller' => 'sulu_contact.account_controller::putContactsAction', '_format' => 'json'], ['accountId', 'contactId', '_format'], ['PUT' => 0], null, false, true, null]],
        1498 => [[['_route' => 'sulu_contact.delete_account_contacts', '_controller' => 'sulu_contact.account_controller::deleteContactsAction', '_format' => 'json'], ['accountId', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        1535 => [[['_route' => 'sulu_contact.get_account_addresses', '_controller' => 'sulu_contact.account_controller::getAddressesAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1565 => [
            [['_route' => 'sulu_contact.get_accounts', '_controller' => 'sulu_contact.account_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.post_account', '_controller' => 'sulu_contact.account_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1609 => [
            [['_route' => 'sulu_contact.put_account', '_controller' => 'sulu_contact.account_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.patch_account', '_controller' => 'sulu_contact.account_controller::patchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.delete_account', '_controller' => 'sulu_contact.account_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1654 => [[['_route' => 'sulu_contact.multipledeleteinfo_account', '_controller' => 'sulu_contact.account_controller::multipledeleteinfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1699 => [[['_route' => 'sulu_contact.get_account_deleteinfo', '_controller' => 'sulu_contact.account_controller::getDeleteinfoAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1735 => [[['_route' => 'sulu_contact.get_account', '_controller' => 'sulu_contact.account_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1790 => [[['_route' => 'sulu_contact.delete_account_medias', '_controller' => 'sulu_contact.account_media_controller::deleteAction', '_format' => 'json'], ['contactId', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        1819 => [
            [['_route' => 'sulu_contact.post_account_medias', '_controller' => 'sulu_contact.account_media_controller::postAction', '_format' => 'json'], ['contactId', '_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.cget_account_medias', '_controller' => 'sulu_contact.account_media_controller::cgetAction', '_format' => 'json'], ['contactId', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_contact.get_account_medias', '_controller' => 'sulu_contact.account_media_controller::cgetAction', '_format' => 'json'], ['contactId', '_format'], ['GET' => 0], null, false, true, null],
        ],
        1857 => [[['_route' => 'sulu_activity.get_activities', '_controller' => 'sulu_activity.activity_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1898 => [[['_route' => 'sulu_security.get_roles', '_controller' => 'sulu_security.role_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1935 => [[['_route' => 'sulu_security.get_role', '_controller' => 'sulu_security.role_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1961 => [[['_route' => 'sulu_security.post_role', '_controller' => 'sulu_security.role_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2004 => [
            [['_route' => 'sulu_security.put_role', '_controller' => 'sulu_security.role_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_security.delete_role', '_controller' => 'sulu_security.role_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2062 => [
            [['_route' => 'sulu_security.get_role_setting', '_controller' => 'sulu_security.role_setting_controller::getAction', '_format' => 'json'], ['roleId', 'key', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_security.put_role_setting', '_controller' => 'sulu_security.role_setting_controller::putAction', '_format' => 'json'], ['roleId', 'key', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        2098 => [
            [['_route' => 'sulu_routes.post_route', '_controller' => 'sulu_route.route_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sulu_routes.get_routes', '_controller' => 'sulu_route.route_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_routes.delete_routes', '_controller' => 'sulu_route.route_controller::cdeleteAction', '_format' => 'json'], ['_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2141 => [[['_route' => 'sulu_page.post_resourcelocator', '_controller' => 'sulu_page.resource_locator_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2177 => [[['_route' => 'sulu_security.get_groups', '_controller' => 'sulu_security.group_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2214 => [[['_route' => 'sulu_security.get_group', '_controller' => 'sulu_security.group_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2240 => [[['_route' => 'sulu_security.post_group', '_controller' => 'sulu_security.group_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2280 => [
            [['_route' => 'sulu_security.put_group', '_controller' => 'sulu_security.group_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_security.delete_group', '_controller' => 'sulu_security.group_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2327 => [[['_route' => 'sulu_security.get_user', '_controller' => 'sulu_security.user_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2353 => [[['_route' => 'sulu_security.post_user', '_controller' => 'sulu_security.user_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2393 => [
            [['_route' => 'sulu_security.put_user', '_controller' => 'sulu_security.user_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_security.patch_user', '_controller' => 'sulu_security.user_controller::patchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'sulu_security.delete_user', '_controller' => 'sulu_security.user_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2420 => [[['_route' => 'sulu_security.get_users', '_controller' => 'sulu_security.user_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2457 => [[['_route' => 'sulu_security.post_user_trigger', '_controller' => 'sulu_security.user_controller::postTriggerAction', '_format' => 'json'], ['id', '_format'], ['POST' => 0], null, false, true, null]],
        2501 => [
            [['_route' => 'sulu_security.get_permissions', '_controller' => 'sulu_security.permission_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_security.put_permissions', '_controller' => 'sulu_security.permission_controller::cputAction', '_format' => 'json'], ['_format'], ['PUT' => 0], null, false, true, null],
        ],
        2543 => [
            [['_route' => 'sulu_security.get_profile', '_controller' => 'sulu_security.profile_controller::getAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_security.put_profile', '_controller' => 'sulu_security.profile_controller::putAction', '_format' => 'json'], ['_format'], ['PUT' => 0], null, false, true, null],
        ],
        2582 => [
            [['_route' => 'sulu_security.patch_profile_settings', '_controller' => 'sulu_security.profile_controller::patchSettingsAction', '_format' => 'json'], ['_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'sulu_security.delete_profile_settings', '_controller' => 'sulu_security.profile_controller::deleteSettingsAction', '_format' => 'json'], ['_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2636 => [[['_route' => 'sulu_preview.get_preview-link', '_controller' => 'sulu_preview.preview_link_controller::getAction', '_format' => 'json'], ['resourceId', '_format'], ['GET' => 0], null, false, true, null]],
        2679 => [[['_route' => 'sulu_preview.post_preview-link_trigger', '_controller' => 'sulu_preview.preview_link_controller::postTriggerAction', '_format' => 'json'], ['resourceId', '_format'], ['POST' => 0], null, false, true, null]],
        2715 => [[['_route' => 'sulu_preview.post_preview_link_trigger', '_controller' => 'sulu_preview.preview_link_controller::postTriggerAction', '_format' => 'json'], ['resourceId', '_format'], ['POST' => 0], null, false, true, null]],
        2780 => [[['_route' => 'sulu_page.post_page_resourcelocator_generate', '_controller' => 'sulu_page.page_resource_locator_controller::postGenerateAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2834 => [
            [['_route' => 'sulu_page.get_page_resourcelocators', '_controller' => 'sulu_page.page_resource_locator_controller::cgetAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_page.delete_page_resourcelocators', '_controller' => 'sulu_page.page_resource_locator_controller::cdeleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2871 => [[['_route' => 'sulu_page.get_page', '_controller' => 'sulu_page.page_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2898 => [[['_route' => 'sulu_page.post_page', '_controller' => 'sulu_page.page_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2938 => [
            [['_route' => 'sulu_page.put_page', '_controller' => 'sulu_page.page_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_page.delete_page', '_controller' => 'sulu_page.page_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2965 => [[['_route' => 'sulu_page.get_pages', '_controller' => 'sulu_page.page_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3002 => [[['_route' => 'sulu_page.post_page_trigger', '_controller' => 'sulu_page.page_controller::postTriggerAction', '_format' => 'json'], ['id', '_format'], ['POST' => 0], null, false, true, null]],
        3054 => [
            [['_route' => 'sulu_security.cget_security-contexts', '_controller' => 'sulu_security.contexts_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_security.get_security-contexts', '_controller' => 'sulu_security.contexts_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        3094 => [[['_route' => 'sulu_snippet.get_snippets', '_controller' => 'sulu_snippet.controller.snippet::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3131 => [[['_route' => 'sulu_snippet.get_snippet', '_controller' => 'sulu_snippet.controller.snippet::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3157 => [[['_route' => 'sulu_snippet.post_snippet', '_controller' => 'sulu_snippet.controller.snippet::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3197 => [
            [['_route' => 'sulu_snippet.put_snippet', '_controller' => 'sulu_snippet.controller.snippet::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_snippet.delete_snippet', '_controller' => 'sulu_snippet.controller.snippet::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sulu_snippet.post_snippet_trigger', '_controller' => 'sulu_snippet.controller.snippet::postTriggerAction', '_format' => 'json'], ['id', '_format'], ['POST' => 0], null, false, true, null],
        ],
        3235 => [[['_route' => 'sulu_snippet.get_snippet-areas', '_controller' => 'sulu_snippet.snippet_area_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3275 => [
            [['_route' => 'sulu_snippet.put_snippet-area', '_controller' => 'sulu_snippet.snippet_area_controller::putAction', '_format' => 'json'], ['key', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_snippet.delete_snippet-area', '_controller' => 'sulu_snippet.snippet_area_controller::deleteAction', '_format' => 'json'], ['key', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3330 => [[['_route' => 'sulu_page.get_webspace_localizations', '_controller' => 'sulu_page.webspace_localization_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3360 => [[['_route' => 'sulu_page.get_webspaces', '_controller' => 'sulu_page.webspace_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3400 => [[['_route' => 'sulu_page.get_webspace', '_controller' => 'sulu_page.webspace_controller::getAction', '_format' => 'json'], ['webspaceKey', '_format'], ['GET' => 0], null, false, true, null]],
        3450 => [[['_route' => 'sulu_website.cget_webspace_analytics', '_controller' => 'sulu_website.analytics_controller::cgetAction', '_format' => 'json'], ['webspace', '_format'], ['GET' => 0], null, false, true, null]],
        3487 => [[['_route' => 'sulu_website.get_webspace_analytics', '_controller' => 'sulu_website.analytics_controller::getAction', '_format' => 'json'], ['webspace', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3513 => [[['_route' => 'sulu_website.post_webspace_analytics', '_controller' => 'sulu_website.analytics_controller::postAction', '_format' => 'json'], ['webspace', '_format'], ['POST' => 0], null, false, true, null]],
        3553 => [
            [['_route' => 'sulu_website.put_webspace_analytics', '_controller' => 'sulu_website.analytics_controller::putAction', '_format' => 'json'], ['webspace', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_website.delete_webspace_analytics', '_controller' => 'sulu_website.analytics_controller::deleteAction', '_format' => 'json'], ['webspace', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3580 => [[['_route' => 'sulu_website.cdelete_webspace_analytics', '_controller' => 'sulu_website.analytics_controller::cdeleteAction', '_format' => 'json'], ['webspace', '_format'], ['DELETE' => 0], null, false, true, null]],
        3622 => [[['_route' => 'sulu_custom_url.cget_webspace_custom-urls', '_controller' => 'sulu_custom_urls.custom_url_controller::cgetAction', '_format' => 'json'], ['webspace', '_format'], ['GET' => 0], null, false, true, null]],
        3659 => [[['_route' => 'sulu_custom_url.get_webspace_custom-urls', '_controller' => 'sulu_custom_urls.custom_url_controller::getAction', '_format' => 'json'], ['webspace', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3685 => [[['_route' => 'sulu_custom_url.post_webspace_custom-urls', '_controller' => 'sulu_custom_urls.custom_url_controller::postAction', '_format' => 'json'], ['webspace', '_format'], ['POST' => 0], null, false, true, null]],
        3725 => [
            [['_route' => 'sulu_custom_url.put_webspace_custom-urls', '_controller' => 'sulu_custom_urls.custom_url_controller::putAction', '_format' => 'json'], ['webspace', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_custom_url.delete_webspace_custom-urls', '_controller' => 'sulu_custom_urls.custom_url_controller::deleteAction', '_format' => 'json'], ['webspace', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3752 => [[['_route' => 'sulu_custom_url.cdelete_webspace_custom-urls', '_controller' => 'sulu_custom_urls.custom_url_controller::cdeleteAction', '_format' => 'json'], ['webspace', '_format'], ['DELETE' => 0], null, false, true, null]],
        3797 => [
            [['_route' => 'sulu_custom_url.get_webspace_custom-urls_routes', '_controller' => 'sulu_custom_urls.custom_url_route_controller::cgetAction', '_format' => 'json'], ['webspace', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_custom_url.delete_webspace_custom-urls_routes', '_controller' => 'sulu_custom_urls.custom_url_route_controller::cdeleteAction', '_format' => 'json'], ['webspace', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3834 => [[['_route' => 'sulu_page.get_items', '_controller' => 'sulu_page.smart_content_item_controller::getItemsAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3879 => [[['_route' => 'sulu_media.get_media', '_controller' => 'sulu_media.media_controller::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3908 => [
            [['_route' => 'sulu_media.cget_media', '_controller' => 'sulu_media.media_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sulu_media.post_media', '_controller' => 'sulu_media.media_controller::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3952 => [
            [['_route' => 'sulu_media.put_media', '_controller' => 'sulu_media.media_controller::putAction', '_format' => 'json'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sulu_media.delete_media', '_controller' => 'sulu_media.media_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4007 => [[['_route' => 'sulu_media.delete_media_version', '_controller' => 'sulu_media.media_controller::deleteVersionAction', '_format' => 'json'], ['id', 'version', '_format'], ['DELETE' => 0], null, false, true, null]],
        4043 => [[['_route' => 'sulu_media.post_media_trigger', '_controller' => 'sulu_media.media_controller::postTriggerAction', '_format' => 'json'], ['id', '_format'], ['POST' => 0], null, false, true, null]],
        4091 => [
            [['_route' => 'sulu_media.delete_media_preview', '_controller' => 'sulu_media.media_preview_controller::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sulu_media.post_media_preview', '_controller' => 'sulu_media.media_preview_controller::postAction', '_format' => 'json'], ['id', '_format'], ['POST' => 0], null, false, true, null],
        ],
        4128 => [[['_route' => 'sulu_media.get_media_formats', '_controller' => 'sulu_media.media_format_controller::cgetAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4165 => [[['_route' => 'sulu_media.put_media_format', '_controller' => 'sulu_media.media_format_controller::putAction', '_format' => 'json'], ['id', 'key', '_format'], ['PUT' => 0], null, false, true, null]],
        4191 => [[['_route' => 'sulu_media.patch_media_formats', '_controller' => 'sulu_media.media_format_controller::cpatchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        4228 => [[['_route' => 'sulu_media.get_formats', '_controller' => 'sulu_media.format_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        4266 => [[['_route' => 'sulu_snippet.get_languages', '_controller' => 'sulu_snippet.language_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        4304 => [[['_route' => 'sulu_core.get_localizations', '_controller' => 'sulu_core.localization_controller::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        4344 => [[['_route' => 'sulu_admin.metadata', '_controller' => 'sulu_admin.admin_controller::metadataAction'], ['type', 'key'], null, null, false, true, null]],
        4383 => [[['_route' => 'sulu_media.redirect', '_controller' => 'sulu_media.media_redirect_controller::redirectAction'], ['id'], null, null, false, true, null]],
        4415 => [[['_route' => 'sulu_media.website.media.download_admin', '_controller' => 'sulu_media.media_stream_controller:downloadAction', '_requestAnalyzer' => false], ['id', 'slug'], null, null, false, true, null]],
        4439 => [[['_route' => 'sulu_preview.public_preview', '_controller' => 'sulu_preview.public_preview_controller::previewAction'], ['token'], null, null, false, true, null]],
        4455 => [[['_route' => 'sulu_preview.public_render', '_controller' => 'sulu_preview.public_preview_controller::renderAction'], ['token'], null, null, false, false, null]],
        4485 => [[['_route' => 'sulu_media.website.image.proxy', '_controller' => 'sulu_media.media_stream_controller::getImageAction', '_requestAnalyzer' => false], ['slug'], null, null, false, true, null]],
        4524 => [
            [['_route' => 'sulu_media.website.media.download', '_controller' => 'sulu_media.media_stream_controller::downloadAction', '_requestAnalyzer' => false], ['id', 'slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
