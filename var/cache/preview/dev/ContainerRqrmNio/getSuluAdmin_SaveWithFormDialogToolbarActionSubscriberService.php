<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_SaveWithFormDialogToolbarActionSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_admin.save_with_form_dialog_toolbar_action_subscriber' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\Serializer\Subscriber\SaveWithFormDialogToolbarActionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Serializer/Subscriber/SaveWithFormDialogToolbarActionSubscriber.php';

        return $container->privates['sulu_admin.save_with_form_dialog_toolbar_action_subscriber'] = new \Sulu\Bundle\AdminBundle\Serializer\Subscriber\SaveWithFormDialogToolbarActionSubscriber(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
