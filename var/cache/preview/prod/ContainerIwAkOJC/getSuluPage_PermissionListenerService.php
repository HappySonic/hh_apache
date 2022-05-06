<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_PermissionListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.permission_listener' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Search\EventListener\PermissionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Search/EventListener/PermissionListener.php';

        return $container->privates['sulu_page.permission_listener'] = new \Sulu\Bundle\PageBundle\Search\EventListener\PermissionListener(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService')));
    }
}
