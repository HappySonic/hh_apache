<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluRoute_Subscriber_RoutableService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_route.subscriber.routable' shared service.
     *
     * @return \Sulu\Bundle\RouteBundle\Document\Subscriber\RoutableSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Document/Subscriber/RoutableSubscriber.php';

        return $container->privates['sulu_route.subscriber.routable'] = new \Sulu\Bundle\RouteBundle\Document\Subscriber\RoutableSubscriber(($container->privates['sulu_route.chain_generator'] ?? $container->load('getSuluRoute_ChainGeneratorService')), ($container->privates['sulu_route.manager.route_manager'] ?? $container->load('getSuluRoute_Manager_RouteManagerService')), ($container->services['sulu.repository.route'] ?? $container->getSulu_Repository_RouteService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()), ($container->services['sulu_page.structure.factory'] ?? $container->getSuluPage_Structure_FactoryService()), ($container->privates['sulu_route.manager.conflict_resolver.auto_increment'] ?? $container->load('getSuluRoute_Manager_ConflictResolver_AutoIncrementService')));
    }
}
