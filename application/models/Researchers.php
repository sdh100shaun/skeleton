<?php

class Model_Researchers extends Zend_Db_Table_Abstract
{
	protected $_name="researchers";
        protected $_id ='id';

	private $_logger;

	/**
	 * Constructor set up object
	 * @param Zend_Log $logger
	 * @param Zend_dbAdapter $db
	 */
	public function __construct($logger,$db)
	{
		parent::__construct($db);
		$this->setLogger($logger);

	}

	/**
	 * Setter for logger
	 * @param Zend_log $logger
	 */
	public function setLogger($logger)
	{
		$this->_logger =$logger;
	}

	/**
	 * Getter for logger
	 */
	public function getLogger()
	{
		return $this->_logger;
	}
	
	
}