<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_MediaTrashItemHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_media.media_trash_item_handler' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Trash\MediaTrashItemHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/StoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/RestoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/RemoveTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/RestoreConfigurationProvider/RestoreConfigurationProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Trash/MediaTrashItemHandler.php';

        return $container->privates['sulu_media.media_trash_item_handler'] = new \Sulu\Bundle\MediaBundle\Trash\MediaTrashItemHandler(($container->privates['sulu_trash.trash_item_repository'] ?? $container->getSuluTrash_TrashItemRepositoryService()), ($container->services['sulu.repository.media'] ?? $container->getSulu_Repository_MediaService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['sulu_trash.doctrine_restore_helper'] ?? $container->load('getSuluTrash_DoctrineRestoreHelperService')), ($container->privates['sulu_activity.domain_event_collector'] ?? $container->getSuluActivity_DomainEventCollectorService()), ($container->services['sulu_media.storage'] ?? $container->getSuluMedia_StorageService()));
    }
}
