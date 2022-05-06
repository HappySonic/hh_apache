<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_Command_ExportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_snippet.command.export' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Command\SnippetExportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Command/SnippetExportCommand.php';

        $container->privates['sulu_snippet.command.export'] = $instance = new \Sulu\Bundle\SnippetBundle\Command\SnippetExportCommand(($container->services['sulu_snippet.export.snippet'] ?? $container->load('getSuluSnippet_Export_SnippetService')));

        $instance->setName('sulu:snippet:export');

        return $instance;
    }
}
