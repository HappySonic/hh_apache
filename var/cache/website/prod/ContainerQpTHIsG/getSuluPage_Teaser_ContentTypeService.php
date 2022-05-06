<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Teaser_ContentTypeService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_page.teaser.content_type' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Teaser\TeaserContentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SimpleContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/PropertyMetadataMapperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Teaser/TeaserContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Teaser/Provider/TeaserProviderPoolInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Teaser/Provider/TeaserProviderPool.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Teaser/Provider/TeaserProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Teaser/PageTeaserProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Teaser/PHPCRPageTeaserProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Teaser/TeaserManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Teaser/TeaserManager.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/PropertyMetadataMinMaxValueResolver.php';

        $a = ($container->services['translator'] ?? $container->getTranslatorService());

        $b = new \Sulu\Bundle\PageBundle\Teaser\Provider\TeaserProviderPool(['pages' => new \Sulu\Bundle\PageBundle\Teaser\PageTeaserProvider(($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService')), $a, false, new \Sulu\Bundle\PageBundle\Teaser\PHPCRPageTeaserProvider(($container->privates['sulu.content.query_executor'] ?? $container->getSulu_Content_QueryExecutorService()), ($container->privates['sulu_page.smart_content.data_provider.content.query_builder'] ?? $container->load('getSuluPage_SmartContent_DataProvider_Content_QueryBuilderService')), ($container->services['sulu_page.structure.factory'] ?? $container->getSuluPage_Structure_FactoryService()), $a, false, $container->parameters['sulu_security.permissions']))]);

        return $container->services['sulu_page.teaser.content_type'] = new \Sulu\Bundle\PageBundle\Teaser\TeaserContentType($b, new \Sulu\Bundle\PageBundle\Teaser\TeaserManager($b), ($container->privates['sulu_website.reference_store_pool'] ?? $container->getSuluWebsite_ReferenceStorePoolService()), ($container->privates['sulu_admin.property_metadata_min_max_value_resolver'] ?? ($container->privates['sulu_admin.property_metadata_min_max_value_resolver'] = new \Sulu\Bundle\AdminBundle\Metadata\SchemaMetadata\PropertyMetadataMinMaxValueResolver())));
    }
}
