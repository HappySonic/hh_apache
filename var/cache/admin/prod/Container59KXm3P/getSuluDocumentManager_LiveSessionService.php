<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_LiveSessionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_document_manager.live_session' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Session\Session
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_document_manager.live_session'] = new \Sulu\Bundle\DocumentManagerBundle\Session\Session([($container->privates['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] ?? ($container->privates['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] = new \Jackalope\RepositoryFactoryDoctrineDBAL()))->getRepository(['jackalope.doctrine_dbal_connection' => ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), 'jackalope.data_caches' => ['meta' => ($container->privates['doctrine_phpcr.meta_cache_provider'] ?? $container->getDoctrinePhpcr_MetaCacheProviderService()), 'nodes' => ($container->privates['doctrine_phpcr.nodes_cache_provider'] ?? $container->getDoctrinePhpcr_NodesCacheProviderService())], 'jackalope.check_login_on_server' => false]), 'login'](new \PHPCR\SimpleCredentials('admin', 'admin'), $container->getEnv('string:PHPCR_WORKSPACE').'_live'));
    }
}
