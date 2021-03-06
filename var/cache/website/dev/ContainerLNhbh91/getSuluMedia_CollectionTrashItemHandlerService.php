<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_CollectionTrashItemHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_media.collection_trash_item_handler' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Trash\CollectionTrashItemHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/StoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/RestoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/RestoreConfigurationProvider/RestoreConfigurationProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Trash/CollectionTrashItemHandler.php';

        return $container->privates['sulu_media.collection_trash_item_handler'] = new \Sulu\Bundle\MediaBundle\Trash\CollectionTrashItemHandler(($container->privates['sulu_trash.trash_item_repository'] ?? $container->getSuluTrash_TrashItemRepositoryService()), ($container->services['sulu_media.collection_repository'] ?? $container->getSuluMedia_CollectionRepositoryService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['sulu_trash.doctrine_restore_helper'] ?? $container->load('getSuluTrash_DoctrineRestoreHelperService')), ($container->privates['sulu_activity.domain_event_collector'] ?? $container->getSuluActivity_DomainEventCollectorService()));
    }
}
