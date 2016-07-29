<?php
/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 29/07/2016
 * Time: 11:23
 */

namespace DesignPatterns\Router;

use DesignPatterns\Container\FactoryInterface;
use Interop\Container\ContainerInterface;

class RouterFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param \Interop\Container\ContainerInterface $container
     * @return mixed
     */
    public function createService(ContainerInterface $container)
    {
        $configuration = $container->get('configuration');

        if (!$configuration->offsetExists('routes')) {
            $configuration->offsetSet('routes', []);
        }
        return new Router($configuration->offsetGet('routes')->getArrayCopy(), $container);
    }

}