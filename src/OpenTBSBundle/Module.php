<?php

namespace Kipperlenny\OpenTBSBundle;

use Zend\Navigation\AbstractContainer;
use Zend\ServiceManager\ServiceManager;

class Module
{

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'TSB' => __NAMESPACE__ . '\Factory\TSBFactory',
            )
        );
    }
    
    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
                array(
                    'TSB' => __DIR__ . '/../lib/tbs_class.php', 
                    'OpenTSB' => __DIR__ . '/../lib/tbs_plugin_class.php', 
                ),
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__, 
                ), 
            ),
        );
    }

}
