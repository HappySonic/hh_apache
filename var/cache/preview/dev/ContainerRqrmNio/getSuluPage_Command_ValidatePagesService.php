<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Command_ValidatePagesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.command.validate_pages' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\ValidatePagesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Command/ValidatePagesCommand.php';

        $container->privates['sulu_page.command.validate_pages'] = $instance = new \Sulu\Bundle\PageBundle\Command\ValidatePagesCommand(($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()), ($container->services['sulu.content.webspace_structure_provider'] ?? $container->load('getSulu_Content_WebspaceStructureProviderService')));

        $instance->setName('sulu:content:validate');

        return $instance;
    }
}
