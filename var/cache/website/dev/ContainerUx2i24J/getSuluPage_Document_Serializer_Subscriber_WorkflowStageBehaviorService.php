<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Document_Serializer_Subscriber_WorkflowStageBehaviorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.document.serializer.subscriber.workflow_stage_behavior' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Serializer\Subscriber\WorkflowStageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Serializer/Subscriber/WorkflowStageSubscriber.php';

        return $container->privates['sulu_page.document.serializer.subscriber.workflow_stage_behavior'] = new \Sulu\Bundle\PageBundle\Serializer\Subscriber\WorkflowStageSubscriber();
    }
}