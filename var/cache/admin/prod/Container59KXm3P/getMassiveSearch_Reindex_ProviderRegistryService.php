<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Reindex_ProviderRegistryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'massive_search.reindex.provider_registry' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Reindex\ReindexProviderRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Reindex/ReindexProviderRegistry.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Reindex/ReindexProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Reindex/Provider/DoctrineOrmProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Reindex/LocalizedReindexProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Search/Reindex/StructureProvider.php';

        $container->privates['massive_search.reindex.provider_registry'] = $instance = new \Massive\Bundle\SearchBundle\Search\Reindex\ReindexProviderRegistry();

        $instance->addProvider('doctrine_orm', new \Massive\Bundle\SearchBundle\Search\Reindex\Provider\DoctrineOrmProvider(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['massive_search.metadata.factory'] ?? $container->load('getMassiveSearch_Metadata_FactoryService'))));
        $instance->addProvider('sulu_structure', new \Sulu\Bundle\PageBundle\Search\Reindex\StructureProvider(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.metadata_factory.base'] ?? $container->getSuluDocumentManager_MetadataFactory_BaseService()), ($container->services['sulu_page.structure.factory'] ?? $container->getSuluPage_Structure_FactoryService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), 'admin'));

        return $instance;
    }
}