<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_Content_SingleAccountSelectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_contact.content.single_account_selection' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\Content\Types\SingleAccountSelection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ComplexContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Content/Types/SingleAccountSelection.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStoreInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStore.php';

        return $container->services['sulu_contact.content.single_account_selection'] = new \Sulu\Bundle\ContactBundle\Content\Types\SingleAccountSelection(($container->services['sulu_contact.account_manager'] ?? $container->load('getSuluContact_AccountManagerService')), ($container->privates['sulu_contact.reference_store.account'] ?? ($container->privates['sulu_contact.reference_store.account'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())));
    }
}
