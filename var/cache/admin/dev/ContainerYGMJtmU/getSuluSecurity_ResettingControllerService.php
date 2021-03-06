<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_ResettingControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_security.resetting_controller' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Controller\ResettingController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Controller/ResettingController.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Util/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Util/TokenGenerator.php';

        return $container->services['sulu_security.resetting_controller'] = new \Sulu\Bundle\SecurityBundle\Controller\ResettingController(($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['sulu_security.token_generator'] ?? ($container->services['sulu_security.token_generator'] = new \Sulu\Bundle\SecurityBundle\Util\TokenGenerator())), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['swiftmailer.mailer.default'] ?? $container->load('getSwiftmailer_Mailer_DefaultService')), ($container->services['sulu_security.encoder_factory'] ?? $container->load('getSuluSecurity_EncoderFactoryService')), ($container->services['sulu.repository.user'] ?? $container->getSulu_Repository_UserService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['sulu_activity.domain_event_collector'] ?? $container->getSuluActivity_DomainEventCollectorService()), 'Sulu', '', 'sulu_security.reset_mail_subject', 'admin', '@SuluSecurity/mail_templates/reset_password.html.twig', 3, $container->getEnv('SULU_ADMIN_EMAIL'), $container->getEnv('string:APP_SECRET').'%');
    }
}
