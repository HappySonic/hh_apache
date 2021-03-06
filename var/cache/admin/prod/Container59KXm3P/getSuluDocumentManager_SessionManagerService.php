<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_SessionManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.session_manager' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Session\SessionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Session/SessionManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Session/SessionManager.php';

        return $container->privates['sulu_document_manager.session_manager'] = new \Sulu\Bundle\DocumentManagerBundle\Session\SessionManager(($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()), ($container->services['sulu_document_manager.live_session'] ?? $container->load('getSuluDocumentManager_LiveSessionService')));
    }
}
