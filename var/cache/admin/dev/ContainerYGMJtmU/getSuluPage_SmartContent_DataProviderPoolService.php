<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_SmartContent_DataProviderPoolService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_page.smart_content.data_provider_pool' shared service.
     *
     * @return \Sulu\Component\SmartContent\DataProviderPool
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/SmartContent/DataProviderPoolInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/SmartContent/DataProviderPool.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/SmartContent/DataProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/SmartContent/Orm/BaseDataProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Contact/SmartContent/ContactDataProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Contact/SmartContent/AccountDataProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Media/SmartContent/MediaDataProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/SmartContent/Orm/DataProviderRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/SmartContent/Orm/DataProviderRepositoryTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Entity/MediaDataProviderRepository.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Content/SnippetDataProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SmartContent/QueryBuilder.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Content/SnippetQueryBuilder.php';
        include_once \dirname(__DIR__, 5).'/vendor/friendsofphp/proxy-manager-lts/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/SmartContent/DataProviderAliasInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SmartContent/PageDataProvider.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStoreInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStore.php';

        $container->services['sulu_page.smart_content.data_provider_pool'] = $instance = new \Sulu\Component\SmartContent\DataProviderPool();

        $a = ($container->services['sulu_core.array_serializer'] ?? $container->getSuluCore_ArraySerializerService());
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());
        $c = ($container->privates['sulu.content.query_executor'] ?? $container->getSulu_Content_QueryExecutorService());
        $d = new \ProxyManager\Factory\LazyLoadingValueHolderFactory(($container->privates['sulu_core.proxy_manager.configuration'] ?? $container->getSuluCore_ProxyManager_ConfigurationService()));
        $e = ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService());
        $f = ($container->privates['sulu_admin.form_metadata_provider'] ?? $container->load('getSuluAdmin_FormMetadataProviderService'));
        $g = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());

        $instance->add('contacts', new \Sulu\Component\Contact\SmartContent\ContactDataProvider(($container->services['sulu_contact.contact_manager'] ?? $container->load('getSuluContact_ContactManagerService')), $a, ($container->privates['sulu_contact.reference_store.contact'] ?? ($container->privates['sulu_contact.reference_store.contact'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore()))));
        $instance->add('accounts', new \Sulu\Component\Contact\SmartContent\AccountDataProvider(($container->services['sulu_contact.account_manager'] ?? $container->load('getSuluContact_AccountManagerService')), $a, ($container->privates['sulu_contact.reference_store.account'] ?? ($container->privates['sulu_contact.reference_store.account'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore()))));
        $instance->add('media', new \Sulu\Component\Media\SmartContent\MediaDataProvider(new \Sulu\Bundle\MediaBundle\Entity\MediaDataProviderRepository($b, ($container->services['sulu_media.media_manager'] ?? $container->getSuluMedia_MediaManagerService()), 'Sulu\\Bundle\\MediaBundle\\Entity\\Media', 'SuluMediaBundle:Collection', ($container->privates['sulu_security.access_control_query_enhancer'] ?? $container->getSuluSecurity_AccessControlQueryEnhancerService())), ($container->services['sulu_media.collection_manager'] ?? $container->load('getSuluMedia_CollectionManagerService')), $a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['sulu_media.reference_store.media'] ?? ($container->privates['sulu_media.reference_store.media'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), ($container->privates['security.helper'] ?? $container->getSecurity_HelperService()), ($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService()), $container->parameters['sulu_security.permissions'], $container->hasParameter("sulu_audience_targeting.enabled"), $b, ($container->services['translator'] ?? $container->getTranslatorService())));
        $instance->add('snippets', new \Sulu\Bundle\SnippetBundle\Content\SnippetDataProvider($c, new \Sulu\Bundle\SnippetBundle\Content\SnippetQueryBuilder(($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()), ($container->services['sulu_page.extension.manager'] ?? $container->getSuluPage_Extension_ManagerService()), ($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), 'i18n'), ($container->services['sulu.util.node_helper'] ?? $container->getSulu_Util_NodeHelperService()), $d, $e, ($container->services['sulu_snippet.reference_store.snippet'] ?? ($container->services['sulu_snippet.reference_store.snippet'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), $container->hasParameter("sulu_audience_targeting.enabled"), $f, $g));
        $instance->add('pages', new \Sulu\Component\Content\SmartContent\PageDataProvider(($container->privates['sulu_page.smart_content.data_provider.content.query_builder'] ?? $container->load('getSuluPage_SmartContent_DataProvider_Content_QueryBuilderService')), $c, $e, $d, ($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()), ($container->privates['sulu_page.reference_store.content'] ?? ($container->privates['sulu_page.reference_store.content'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), true, $container->parameters['sulu_security.permissions'], $container->hasParameter("sulu_audience_targeting.enabled"), $f, $g, $container->parameters['sulu_website.enabled_twig_attributes']));

        return $instance;
    }
}
