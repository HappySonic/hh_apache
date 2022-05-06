<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Command_CleanupHistoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.command.cleanup_history' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\CleanupHistoryCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Command/CleanupHistoryCommand.php';

        $a = ($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService());

        $container->privates['sulu_page.command.cleanup_history'] = $instance = new \Sulu\Bundle\PageBundle\Command\CleanupHistoryCommand(($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), $a, $a);

        $instance->setName('sulu:content:cleanup-history');

        return $instance;
    }
}
