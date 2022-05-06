<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_PageSelectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu.content.type.page_selection' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Content\Types\PageSelection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ComplexContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Content/Types/PageSelection.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStoreInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStore.php';

        return $container->services['sulu.content.type.page_selection'] = new \Sulu\Bundle\PageBundle\Content\Types\PageSelection(($container->privates['sulu.content.query_executor'] ?? $container->getSulu_Content_QueryExecutorService()), ($container->privates['sulu_page.smart_content.data_provider.content.query_builder'] ?? $container->load('getSuluPage_SmartContent_DataProvider_Content_QueryBuilderService')), ($container->privates['sulu_page.reference_store.content'] ?? ($container->privates['sulu_page.reference_store.content'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), false, $container->parameters['sulu_security.permissions'], $container->parameters['sulu_website.enabled_twig_attributes']);
    }
}
