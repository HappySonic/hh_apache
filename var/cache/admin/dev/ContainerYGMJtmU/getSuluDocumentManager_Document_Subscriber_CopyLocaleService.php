<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Document_Subscriber_CopyLocaleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.document.subscriber.copy_locale' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\CopyLocaleSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Document/Subscriber/CopyLocaleSubscriber.php';

        return $container->privates['sulu_document_manager.document.subscriber.copy_locale'] = new \Sulu\Component\Content\Document\Subscriber\CopyLocaleSubscriber(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->privates['sulu.content.resource_locator.strategy_pool'] ?? $container->getSulu_Content_ResourceLocator_StrategyPoolService()));
    }
}
