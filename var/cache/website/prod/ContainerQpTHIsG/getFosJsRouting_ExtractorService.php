<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_ExtractorService extends App_KernelProdContainer
{
    /*
     * Gets the public 'fos_js_routing.extractor' shared service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/jsrouting-bundle/Extractor/ExposedRoutesExtractorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/jsrouting-bundle/Extractor/ExposedRoutesExtractor.php';

        return $container->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor(($container->services['router'] ?? $container->getRouterService()), [0 => 'sulu_location.geolocator_query', 1 => 'sulu_page.post_page_version_trigger', 2 => 'sulu_snippet.put_snippet-area', 3 => 'sulu_media.put_media_format', 4 => 'sulu_media.delete_media_version', 5 => 'sulu_media.post_media_preview', 6 => 'sulu_contact.delete_contact_medias', 7 => 'sulu_contact.delete_account_medias', 8 => 'sulu_contact.delete_account_contacts', 9 => 'sulu_search_indexes', 10 => 'sulu_search_search', 11 => '(.+\\.)?c?get_.*', 12 => 'sulu_admin.metadata', 13 => 'sulu_admin.put_collaborations'], $container->targetDir.'', $container->parameters['kernel.bundles']);
    }
}
