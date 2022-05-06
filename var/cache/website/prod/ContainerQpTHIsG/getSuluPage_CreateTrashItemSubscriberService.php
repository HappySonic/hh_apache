<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_CreateTrashItemSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.create_trash_item_subscriber' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\EventListener\PageTrashSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/EventListener/PageTrashSubscriber.php';

        return $container->privates['sulu_page.create_trash_item_subscriber'] = new \Sulu\Bundle\PageBundle\EventListener\PageTrashSubscriber(($container->privates['sulu_trash.trash_manager'] ?? $container->getSuluTrash_TrashManagerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
