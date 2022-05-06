<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_Command_InitService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_media.command.init' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Command\InitCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Command/InitCommand.php';

        $container->privates['sulu_media.command.init'] = $instance = new \Sulu\Bundle\MediaBundle\Command\InitCommand(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), (\dirname(__DIR__, 5).'/public/uploads/media'));

        $instance->setName('sulu:media:init');

        return $instance;
    }
}
