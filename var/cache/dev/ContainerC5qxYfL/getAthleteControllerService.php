<?php

namespace ContainerC5qxYfL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAthleteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AthleteController' shared autowired service.
     *
     * @return \App\Controller\AthleteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AthleteController.php';

        $container->services['App\\Controller\\AthleteController'] = $instance = new \App\Controller\AthleteController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AthleteController', $container));

        return $instance;
    }
}
