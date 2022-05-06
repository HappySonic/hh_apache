<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_Content_ContactAccountSelectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_contact.content.contact_account_selection' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\Content\Types\ContactAccountSelection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ComplexContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/PreResolvableContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Content/Types/ContactAccountSelection.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Util/IdConverterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Util/CustomerIdConverter.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Util/IndexComparatorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Util/IndexComparator.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStoreInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStore.php';

        return $container->services['sulu_contact.content.contact_account_selection'] = new \Sulu\Bundle\ContactBundle\Content\Types\ContactAccountSelection(($container->services['sulu_contact.contact_manager'] ?? $container->load('getSuluContact_ContactManagerService')), ($container->services['sulu_contact.account_manager'] ?? $container->load('getSuluContact_AccountManagerService')), ($container->services['sulu_core.array_serializer'] ?? $container->getSuluCore_ArraySerializerService()), new \Sulu\Bundle\ContactBundle\Util\CustomerIdConverter(), ($container->services['sulu_contact.util.index_comparator'] ?? ($container->services['sulu_contact.util.index_comparator'] = new \Sulu\Bundle\ContactBundle\Util\IndexComparator())), ($container->privates['sulu_contact.reference_store.account'] ?? ($container->privates['sulu_contact.reference_store.account'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), ($container->privates['sulu_contact.reference_store.contact'] ?? ($container->privates['sulu_contact.reference_store.contact'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())));
    }
}