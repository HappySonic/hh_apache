<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoaderInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.xUrKPVU.Symfony\Component\Config\Loader\LoaderInterface' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.xUrKPVU": it references interface "Symfony\\Component\\Config\\Loader\\LoaderInterface" but no such service exists. You should maybe alias this interface to one of these existing services: "routing.loader.xml", "routing.loader.yml", "routing.loader.php", "routing.loader.glob", "routing.loader.directory", "routing.loader.container", "routing.loader", "routing.loader.annotation", "routing.loader.annotation.directory", "routing.loader.annotation.file", "sulu.content.path_cleaner.replacer_loader", "sulu_core.webspace.loader.delegator", "sulu_core.webspace.loader.xml.1.0", "sulu_core.webspace.loader.xml.1.1", "handcraftedinthealps_rest_routing.loader.directory", "handcraftedinthealps_rest_routing.loader.controller", "handcraftedinthealps_rest_routing.loader.yaml_collection", "handcraftedinthealps_rest_routing.loader.xml_collection", "sulu_admin.form_metadata.form_xml_loader", "sulu_page.structure.loader.xml", "sulu_website.routing.portal_loader", "sulu_document_manager.routing.version_loader".');
    }
}
