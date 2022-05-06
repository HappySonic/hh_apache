<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluTag_TagTrashItemHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_tag.tag_trash_item_handler' shared service.
     *
     * @return \Sulu\Bundle\TagBundle\Trash\TagTrashItemHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/StoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/RestoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/RestoreConfigurationProvider/RestoreConfigurationProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TagBundle/Trash/TagTrashItemHandler.php';

        return $container->privates['sulu_tag.tag_trash_item_handler'] = new \Sulu\Bundle\TagBundle\Trash\TagTrashItemHandler(($container->privates['sulu_trash.trash_item_repository'] ?? $container->getSuluTrash_TrashItemRepositoryService()), ($container->services['sulu.repository.tag'] ?? $container->getSulu_Repository_TagService()), ($container->privates['sulu_trash.doctrine_restore_helper'] ?? $container->load('getSuluTrash_DoctrineRestoreHelperService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['sulu_activity.domain_event_collector'] ?? $container->getSuluActivity_DomainEventCollectorService()));
    }
}
