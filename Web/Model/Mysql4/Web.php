<?php
class Company_Web_Model_Mysql4_Web extends Mage_Core_Model_Mysql4_Abstract{
	
	public function __construct(){
		$this->_init('web/web', 'web_id');
	}
}