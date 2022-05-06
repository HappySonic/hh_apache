<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Command_DumpContentTypesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.command.dump_content_types' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\ContentTypesDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Command/ContentTypesDumpCommand.php';

        $container->privates['sulu_page.command.dump_content_types'] = $instance = new \Sulu\Bundle\PageBundle\Command\ContentTypesDumpCommand();

        $instance->setName('sulu:content:types:dump');

        return $instance;
    }
}