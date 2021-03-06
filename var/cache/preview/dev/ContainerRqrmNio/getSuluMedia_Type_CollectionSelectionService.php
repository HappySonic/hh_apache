<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_Type_CollectionSelectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_media.type.collection_selection' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Content\Types\CollectionSelection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SimpleContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Content/Types/CollectionSelection.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStoreInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStore.php';

        return $container->services['sulu_media.type.collection_selection'] = new \Sulu\Bundle\MediaBundle\Content\Types\CollectionSelection(($container->services['sulu_media.collection_manager'] ?? $container->load('getSuluMedia_CollectionManagerService')), ($container->privates['sulu_media.reference_store.collection'] ?? ($container->privates['sulu_media.reference_store.collection'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())));
    }
}
