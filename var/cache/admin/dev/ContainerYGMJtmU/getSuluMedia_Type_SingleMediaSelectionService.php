<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_Type_SingleMediaSelectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_media.type.single_media_selection' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Content\Types\SingleMediaSelection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SimpleContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/PropertyMetadataMapperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Content/Types/SingleMediaSelection.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStoreInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStore.php';

        return $container->services['sulu_media.type.single_media_selection'] = new \Sulu\Bundle\MediaBundle\Content\Types\SingleMediaSelection(($container->services['sulu_media.media_manager'] ?? $container->getSuluMedia_MediaManagerService()), ($container->privates['sulu_media.reference_store.media'] ?? ($container->privates['sulu_media.reference_store.media'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), ($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService()), ($container->services['sulu_security.security_checker'] ?? $container->getSuluSecurity_SecurityCheckerService()));
    }
}
