<?php

/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 29/07/2016
 * Time: 10:29
 */

namespace DesignPatterns\Router;

use Interop\Container\ContainerInterface;

class Router
{
    private $config = array();

    /**
     * Router constructor.
     * @param array $config
     */
    public function __construct(array $config, ContainerInterface $container)
    {
        $this->config = $config;
    }


}