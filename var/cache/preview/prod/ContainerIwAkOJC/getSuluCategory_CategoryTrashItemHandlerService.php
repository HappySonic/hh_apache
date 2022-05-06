<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCategory_CategoryTrashItemHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_category.category_trash_item_handler' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Trash\CategoryTrashItemHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/StoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/TrashItemHandler/RestoreTrashItemHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/TrashBundle/Application/RestoreConfigurationProvider/RestoreConfigurationProviderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Trash/CategoryTrashItemHandler.php';

        return $container->privates['sulu_category.category_trash_item_handler'] = new \Sulu\Bundle\CategoryBundle\Trash\CategoryTrashItemHandler(($container->privates['sulu_trash.trash_item_repository'] ?? $container->getSuluTrash_TrashItemRepositoryService()), ($container->services['sulu.repository.category'] ?? $container->getSulu_Repository_CategoryService()), ($container->services['sulu.repository.category_meta'] ?? $container->getSulu_Repository_CategoryMetaService()), ($container->services['sulu.repository.category_translation'] ?? $container->getSulu_Repository_CategoryTranslationService()), ($container->services['sulu.repository.keyword'] ?? $container->getSulu_Repository_KeywordService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['sulu_trash.doctrine_restore_helper'] ?? $container->load('getSuluTrash_DoctrineRestoreHelperService')), ($container->privates['sulu_activity.domain_event_collector'] ?? $container->getSuluActivity_DomainEventCollectorService()));
    }
}
