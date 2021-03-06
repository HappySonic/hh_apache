<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Command_WebspaceImportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.command.webspace_import' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\WebspaceImportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Command/WebspaceImportCommand.php';

        $container->privates['sulu_page.command.webspace_import'] = $instance = new \Sulu\Bundle\PageBundle\Command\WebspaceImportCommand(($container->services['sulu_page.import.webspace'] ?? $container->load('getSuluPage_Import_WebspaceService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        $instance->setName('sulu:webspaces:import');

        return $instance;
    }
}
