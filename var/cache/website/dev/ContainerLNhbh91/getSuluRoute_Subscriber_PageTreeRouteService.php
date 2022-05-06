<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluRoute_Subscriber_PageTreeRouteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_route.subscriber.page_tree_route' shared service.
     *
     * @return \Sulu\Bundle\RouteBundle\Document\Subscriber\PageTreeRouteSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Document/Subscriber/PageTreeRouteSubscriber.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/PageTree/PageTreeUpdaterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/PageTree/PageTreeMoverInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/PageTree/PageTreeRepository.php';

        $a = ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService());
        $b = ($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService());
        $c = ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService());
        $d = ($container->services['sulu_page.structure.factory'] ?? $container->getSuluPage_Structure_FactoryService());

        return $container->privates['sulu_route.subscriber.page_tree_route'] = new \Sulu\Bundle\RouteBundle\Document\Subscriber\PageTreeRouteSubscriber($a, $b, $c, $d, ($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()), new \Sulu\Bundle\RouteBundle\PageTree\PageTreeRepository($a, $d, $b, $c));
    }
}
