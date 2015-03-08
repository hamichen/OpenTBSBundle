<?php

namespace OpentbsBundle;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface,
    ServiceProviderInterface
{

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'TBS' => __NAMESPACE__ . '\Factory\TBSFactory',
            )
        );
    }
    
    public function getConfig() {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            /*
             * TODO: Not working with TBS 3.9
             'Zend\Loader\ClassMapAutoloader' => array(
                array(
                    'TBS' => __DIR__ . '/../lib/tbs_class.php', 
                    'OpenTSB' => __DIR__ . '/../lib/tbs_plugin_opentbs.php', 
                ),
            ),
             */
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__, 
                ), 
            ),
        );
    }

}
