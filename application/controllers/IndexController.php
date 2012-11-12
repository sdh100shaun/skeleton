<?php
 

class IndexController extends Zend_Controller_Action
{

	private $_logger; 
	private $_db; 
	
    public function init()
    {
        /* Initialize action controller here */
		$bootstrap = $this->getInvokeArg('bootstrap');
		$this->_logger = $bootstrap->getResource('LogInstance');
		$resource = $bootstrap->getPluginResource('db');
		$this->_db = $resource->getDbAdapter();
    }

    public function indexAction()
    {
        // action body
		$researchers = new Model_Researchers($this->_logger,$this->_db); 
		
    }



}

