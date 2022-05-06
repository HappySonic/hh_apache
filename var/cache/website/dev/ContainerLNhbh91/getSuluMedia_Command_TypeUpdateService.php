<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_Command_TypeUpdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_media.command.type_update' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Command\MediaTypeUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Command/MediaTypeUpdateCommand.php';

        $container->privates['sulu_media.command.type_update'] = $instance = new \Sulu\Bundle\MediaBundle\Command\MediaTypeUpdateCommand(($container->privates['sulu_media.type_manager'] ?? $container->getSuluMedia_TypeManagerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setName('sulu:media:type:update');

        return $instance;
    }
}
