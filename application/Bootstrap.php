<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
 
	
protected function _initAutoload()
	{
		
        $moduleLoader = new Zend_Application_Module_Autoloader(array( 
            'namespace' => '', 
            'basePath'  => APPLICATION_PATH)); 
       $moduleLoader->addResourceTypes(array(
           'forms' => array(
               'namespace' => 'Forms_',
               'path'      => 'forms',
		),
           	'models' => array(
           		'namespace' => 'Model_',
				'path' => 'models'
				)));
				 
				
					
        return $moduleLoader; 
     
		
	}
	
	protected function _initErrorReporting()
	{
		if(APPLICATION_ENV =='development' || $this->bootstrap('config')->logging)
		{
			error_reporting(E_ALL|E_STRICT);
			ini_set('display_errors', 'on');
		}
	}
	
	protected function _initLogInstance()
	{
		$this->bootstrap('Log');

    if (!$this->hasPluginResource('Log')) {
        throw new Zend_Exception('Log not enabled in config.ini');
    }

    	$logger = $this->getResource('Log');
		return $logger;
	}

	protected function _initRoutes()
	{
		 $front = Zend_Controller_Front::getInstance();
	     $router = $front->getRouter();
	     
	     	$router->addRoute ("researcher", new Zend_Controller_Router_Route('index/researcher/:lastname',array('controller'=>'index','action'=>'category',"researcher"=>'prints')));
  		 return $router;
	}
}

