<?php
class Company_Web_Model_Web extends Mage_Core_Model_Abstract
{
	public function __construct(){
		parent::__construct();
		$this->_init('web/web');
	}

	
}