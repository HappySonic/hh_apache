<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Core_RegistratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.subscriber.core.registrator' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Core\RegistratorSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Core/RegistratorSubscriber.php';

        return $container->privates['sulu_document_manager.subscriber.core.registrator'] = new \Sulu\Component\DocumentManager\Subscriber\Core\RegistratorSubscriber(($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))));
    }
}
