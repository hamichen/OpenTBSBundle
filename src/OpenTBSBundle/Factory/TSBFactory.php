<?php
namespace Kipperlenny\OpenTBSBundle\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class TSBFactory
 *
 * @author Lennart Schreiber <kontakt@webzap.eu>
 */
class TSBFactory extends \clsTinyButStrong implements FactoryInterface
{
    
    public function __construct()
    {
        // construct the TBS class
        parent::__construct();

        // load the OpenTBS plugin
        $this->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);
    }
    
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $this;
    }
}
 