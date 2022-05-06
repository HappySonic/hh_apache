<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_SecuritySystemsSelectHelperService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_security.security_systems_select_helper' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Admin\Helper\SecuritySystemsSelect
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Admin/Helper/SecuritySystemsSelect.php';

        return $container->services['sulu_security.security_systems_select_helper'] = new \Sulu\Bundle\SecurityBundle\Admin\Helper\SecuritySystemsSelect(($container->services['sulu_admin.admin_pool'] ?? $container->load('getSuluAdmin_AdminPoolService')), 'Sulu');
    }
}