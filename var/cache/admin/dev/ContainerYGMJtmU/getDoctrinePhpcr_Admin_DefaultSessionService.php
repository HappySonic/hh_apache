<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrinePhpcr_Admin_DefaultSessionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine_phpcr.admin.default_session' shared service.
     *
     * @return \Jackalope\Session
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['doctrine_phpcr.admin.default_session'] = [($container->privates['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] ?? ($container->privates['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] = new \Jackalope\RepositoryFactoryDoctrineDBAL()))->getRepository(['jackalope.doctrine_dbal_connection' => ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), 'jackalope.check_login_on_server' => false]), 'login'](new \PHPCR\SimpleCredentials('admin', 'admin'), NULL);
    }
}
