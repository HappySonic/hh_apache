<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Command_SubscriberDebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.command.subscriber_debug' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Command\SubscriberDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Command/SubscriberDebugCommand.php';

        $container->privates['sulu_document_manager.command.subscriber_debug'] = $instance = new \Sulu\Bundle\DocumentManagerBundle\Command\SubscriberDebugCommand(($container->privates['sulu_document_manager.event_dispatcher.standard'] ?? $container->getSuluDocumentManager_EventDispatcher_StandardService()));

        $instance->setName('sulu:document:subscriber:debug');

        return $instance;
    }
}
