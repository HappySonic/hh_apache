<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Command_InitializeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.command.initialize' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Command\InitializeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Command/InitializeCommand.php';

        $container->privates['sulu_document_manager.command.initialize'] = $instance = new \Sulu\Bundle\DocumentManagerBundle\Command\InitializeCommand(($container->services['sulu_document_manager.initializer'] ?? $container->load('getSuluDocumentManager_InitializerService')));

        $instance->setName('sulu:document:initialize');

        return $instance;
    }
}
