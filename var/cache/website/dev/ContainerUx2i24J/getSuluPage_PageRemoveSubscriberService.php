<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_PageRemoveSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.page_remove_subscriber' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\EventListener\PageRemoveSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/EventListener/PageRemoveSubscriber.php';

        return $container->privates['sulu_page.page_remove_subscriber'] = new \Sulu\Bundle\PageBundle\EventListener\PageRemoveSubscriber(($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->services['sulu.repository.access_control'] ?? $container->getSulu_Repository_AccessControlService()), ($container->privates['sulu_security.system_store'] ?? $container->getSuluSecurity_SystemStoreService()), ($container->privates['security.helper'] ?? $container->getSecurity_HelperService()), $container->parameters['sulu_security.permissions']);
    }
}
