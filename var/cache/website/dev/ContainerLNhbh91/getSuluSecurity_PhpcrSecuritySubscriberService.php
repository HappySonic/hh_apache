<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_PhpcrSecuritySubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_security.phpcr_security_subscriber' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\EventListener\PhpcrSecuritySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/EventListener/PhpcrSecuritySubscriber.php';

        $a = ($container->services['sulu.repository.role'] ?? $container->getSulu_Repository_RoleService());

        return $container->privates['sulu_security.phpcr_security_subscriber'] = new \Sulu\Bundle\SecurityBundle\EventListener\PhpcrSecuritySubscriber(new \Sulu\Component\Security\Authorization\AccessControl\PhpcrAccessControlProvider(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), $a, $container->parameters['permissions']), new \Sulu\Component\Security\Authorization\AccessControl\DoctrineAccessControlProvider(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), $a, ($container->services['sulu.repository.access_control'] ?? $container->getSulu_Repository_AccessControlService()), ($container->services['sulu_security.mask_converter'] ?? $container->getSuluSecurity_MaskConverterService())));
    }
}
