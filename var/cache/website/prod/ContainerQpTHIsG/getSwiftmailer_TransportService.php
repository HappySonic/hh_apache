<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_TransportService extends App_KernelProdContainer
{
    /*
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
        include_once \dirname(__DIR__, 5).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SpoolTransport.php';
        include_once \dirname(__DIR__, 5).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php';
        include_once \dirname(__DIR__, 5).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php';
        include_once \dirname(__DIR__, 5).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
        include_once \dirname(__DIR__, 5).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MarkupBundle/Listener/SwiftMailerListener.php';
        include_once \dirname(__DIR__, 5).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
        include_once \dirname(__DIR__, 5).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';

        $container->services['swiftmailer.transport'] = $instance = new \Swift_Transport_SpoolTransport(($container->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($container->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_MemorySpool());

        $instance->registerPlugin(new \Sulu\Bundle\MarkupBundle\Listener\SwiftMailerListener(new RewindableGenerator(function () use ($container) {
            yield 'html' => ($container->privates['sulu_markup.parser'] ?? $container->getSuluMarkup_ParserService());
        }, 1), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en'));

        return $instance;
    }
}
