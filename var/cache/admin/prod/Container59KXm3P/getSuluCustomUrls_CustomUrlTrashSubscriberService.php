<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCustomUrls_CustomUrlTrashSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_custom_urls.custom_url_trash_subscriber' shared service.
     *
     * @return \Sulu\Bundle\CustomUrlBundle\EventListener\CustomUrlTrashSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/EventListener/CustomUrlTrashSubscriber.php';

        return $container->privates['sulu_custom_urls.custom_url_trash_subscriber'] = new \Sulu\Bundle\CustomUrlBundle\EventListener\CustomUrlTrashSubscriber(($container->privates['sulu_trash.trash_manager'] ?? $container->getSuluTrash_TrashManagerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
