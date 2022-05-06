<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_SnippetTrashSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_snippet.snippet_trash_subscriber' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\EventListener\SnippetTrashSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/EventListener/SnippetTrashSubscriber.php';

        return $container->privates['sulu_snippet.snippet_trash_subscriber'] = new \Sulu\Bundle\SnippetBundle\EventListener\SnippetTrashSubscriber(($container->privates['sulu_trash.trash_manager'] ?? $container->getSuluTrash_TrashManagerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
