<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_MediaListBuilderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_media.media_list_builder_factory' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ListBuilderFactory\MediaListBuilderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Media/ListBuilderFactory/MediaListBuilderFactory.php';

        return $container->privates['sulu_media.media_list_builder_factory'] = new \Sulu\Bundle\MediaBundle\Media\ListBuilderFactory\MediaListBuilderFactory(($container->services['sulu_core.doctrine_rest_helper'] ?? $container->load('getSuluCore_DoctrineRestHelperService')), ($container->services['sulu_core.doctrine_list_builder_factory'] ?? $container->load('getSuluCore_DoctrineListBuilderFactoryService')), ($container->services['sulu_media.collection_repository'] ?? $container->getSuluMedia_CollectionRepositoryService()), ($container->services['sulu_security.security_checker'] ?? $container->getSuluSecurity_SecurityCheckerService()), 'Sulu\\Bundle\\MediaBundle\\Entity\\Media', 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection');
    }
}
