<?php
class Company_Web_Model_Mysql4_Web_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{
	function __construct(){
		parent::__construct();
		$this->_init('web/web')
	}
}