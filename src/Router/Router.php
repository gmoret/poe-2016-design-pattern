<?php

/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 29/07/2016
 * Time: 10:29
 */

namespace DesignPatterns\Router;

use DesignPatterns\Container\Container;
use Interop\Container\ContainerInterface;

class Router
{
    private $config = array();
    private $container;

    /**
     * Router constructor.
     * @param array $config
     * @param mixed $container
     */
    public function __construct(array $config, ContainerInterface $container)
    {
        $this->config = $config;
        $this->container = $container;
    }

    public function route()
    {
        $route = $_GET['route'];
        if (isset($this->config[$route]))
        {
            // charge service à partir du container
            $controller = $this->container->get($this->config[$route]);
            $controller->indexAction();
        } else {
            // erreur 404
            header('HTTP/1.0 404 Not Found');
            echo 'La page n\'existe pas';
        }
        exit();
    }
}