<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_SearchManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'massive_search.search_manager' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\SearchManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/SearchManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/SearchManager.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Metadata/ProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Metadata/Provider/ChainProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Metadata/Provider/DefaultProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Search/Metadata/StructureProvider.php';

        $a = ($container->privates['massive_search.object_to_document_converter'] ?? $container->load('getMassiveSearch_ObjectToDocumentConverterService'));

        if (isset($container->services['massive_search.search_manager'])) {
            return $container->services['massive_search.search_manager'];
        }

        return $container->services['massive_search.search_manager'] = new \Massive\Bundle\SearchBundle\Search\SearchManager(($container->services['massive_search.adapter.zend_lucene'] ?? $container->load('getMassiveSearch_Adapter_ZendLuceneService')), new \Massive\Bundle\SearchBundle\Search\Metadata\Provider\ChainProvider([0 => new \Massive\Bundle\SearchBundle\Search\Metadata\Provider\DefaultProvider(($container->privates['massive_search.metadata.factory'] ?? $container->load('getMassiveSearch_Metadata_FactoryService'))), 1 => new \Sulu\Bundle\PageBundle\Search\Metadata\StructureProvider(($container->privates['sulu_search.search.factory'] ?? ($container->privates['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory())), ($container->privates['sulu_document_manager.metadata_factory'] ?? $container->getSuluDocumentManager_MetadataFactoryService()), ($container->services['sulu_page.structure.factory'] ?? $container->getSuluPage_Structure_FactoryService()), ($container->services['sulu_page.extension.manager'] ?? $container->getSuluPage_Extension_ManagerService()), $container->parameters['sulu_page.search.mapping'])]), $a, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['massive_search.prefix_decorator'] ?? $container->load('getMassiveSearch_PrefixDecoratorService')), ($container->privates['massive_search.metadata.field_evaluator'] ?? $container->load('getMassiveSearch_Metadata_FieldEvaluatorService')));
    }
}
