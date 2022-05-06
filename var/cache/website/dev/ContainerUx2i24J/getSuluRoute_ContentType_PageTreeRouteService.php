<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluRoute_ContentType_PageTreeRouteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_route.content_type.page_tree_route' shared service.
     *
     * @return \Sulu\Bundle\RouteBundle\Content\Type\PageTreeRouteContentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SimpleContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Content/Type/PageTreeRouteContentType.php';

        return $container->services['sulu_route.content_type.page_tree_route'] = new \Sulu\Bundle\RouteBundle\Content\Type\PageTreeRouteContentType(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))), ($container->privates['sulu_route.chain_generator'] ?? $container->load('getSuluRoute_ChainGeneratorService')), ($container->privates['sulu_route.manager.conflict_resolver.auto_increment'] ?? $container->load('getSuluRoute_Manager_ConflictResolver_AutoIncrementService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
