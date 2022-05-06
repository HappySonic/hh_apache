<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_PermissionListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_media.permission_listener' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Search\EventListener\PermissionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Search/EventListener/PermissionListener.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Entity/FileVersionMetaRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Entity/FileVersionMetaRepository.php';

        return $container->privates['sulu_media.permission_listener'] = new \Sulu\Bundle\MediaBundle\Search\EventListener\PermissionListener(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('SuluMediaBundle:FileVersionMeta'), ($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService')));
    }
}
