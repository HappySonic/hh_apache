<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Subscriber_Behavior_FilingService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_document_manager.subscriber.behavior.filing' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\StructureTypeFilingSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/DocumentManager/Subscriber/Behavior/Path/AbstractFilingSubscriber.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/StructureTypeFilingSubscriber.php';

        $a = ($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService());

        return $container->privates['sulu_document_manager.subscriber.behavior.filing'] = new \Sulu\Component\Content\Document\Subscriber\StructureTypeFilingSubscriber($a, $a);
    }
}
