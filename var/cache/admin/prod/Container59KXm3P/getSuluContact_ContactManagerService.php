<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_ContactManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_contact.contact_manager' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\Contact\ContactManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Contact/ContactManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/RelationTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Contact/AbstractContactManager.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/SmartContent/Orm/DataProviderRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Contact/ContactManager.php';

        return $container->services['sulu_contact.contact_manager'] = new \Sulu\Bundle\ContactBundle\Contact\ContactManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sulu_tag.tag_manager'] ?? $container->getSuluTag_TagManagerService()), ($container->services['sulu_media.media_manager'] ?? $container->getSuluMedia_MediaManagerService()), ($container->services['sulu.repository.account'] ?? $container->load('getSulu_Repository_AccountService')), ($container->privates['sulu_contact.contact_title_repository'] ?? $container->load('getSuluContact_ContactTitleRepositoryService')), ($container->services['sulu.repository.contact'] ?? $container->load('getSulu_Repository_ContactService')), ($container->services['sulu.repository.media'] ?? $container->getSulu_Repository_MediaService()), ($container->privates['sulu_activity.domain_event_collector'] ?? $container->getSuluActivity_DomainEventCollectorService()), ($container->services['sulu.repository.user'] ?? $container->getSulu_Repository_UserService()), ($container->privates['sulu_trash.trash_manager'] ?? $container->getSuluTrash_TrashManagerService()));
    }
}
