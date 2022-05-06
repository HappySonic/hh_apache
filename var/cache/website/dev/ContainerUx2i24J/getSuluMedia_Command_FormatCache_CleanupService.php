<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_Command_FormatCache_CleanupService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_media.command.format_cache.cleanup' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Command\FormatCacheCleanupCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Command/FormatCacheCleanupCommand.php';

        $container->privates['sulu_media.command.format_cache.cleanup'] = $instance = new \Sulu\Bundle\MediaBundle\Command\FormatCacheCleanupCommand(($container->services['sulu.repository.media'] ?? $container->getSulu_Repository_MediaService()), ($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), (\dirname(__DIR__, 5).'/public/uploads/media'));

        $instance->setName('sulu:media:format:cache:cleanup');

        return $instance;
    }
}
