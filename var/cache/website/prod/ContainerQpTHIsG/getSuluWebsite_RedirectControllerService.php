<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_RedirectControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_website.redirect_controller' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Controller\RedirectController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Controller/RedirectController.php';

        return $container->services['sulu_website.redirect_controller'] = new \Sulu\Bundle\WebsiteBundle\Controller\RedirectController(($container->services['router'] ?? $container->getRouterService()));
    }
}
