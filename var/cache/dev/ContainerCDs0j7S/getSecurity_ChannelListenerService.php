<?php

namespace ContainerCDs0j7S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ChannelListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ChannelListener.php';

        $a = ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService());

        return $container->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), $a->getHttpPort(), $a->getHttpsPort());
    }
}
