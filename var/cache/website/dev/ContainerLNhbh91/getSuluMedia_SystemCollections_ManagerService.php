<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_SystemCollections_ManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_media.system_collections.manager' shared service.
     *
     * @return \Sulu\Component\Media\SystemCollections\SystemCollectionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Media/SystemCollections/SystemCollectionManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Media/SystemCollections/SystemCollectionManager.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Cache/DataCache.php';

        return $container->services['sulu_media.system_collections.manager'] = new \Sulu\Component\Media\SystemCollections\SystemCollectionManager($container->parameters['sulu_media.system_collections'], ($container->services['sulu_media.collection_manager'] ?? $container->load('getSuluMedia_CollectionManagerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), new \Sulu\Component\Cache\DataCache(($container->targetDir.''.'/sulu/system_collection.cache')), 'en');
    }
}
