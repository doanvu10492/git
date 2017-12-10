<?php
class Company_Web_Adminhtml_WebController extends Mage_Adminhtml_Controller_Action{
	
	 protected function _initAction() {
  $this->loadLayout()
   ->_setActiveMenu('web/items')
   ->_addBreadcrumb(Mage::helper('web')->__('Items Manager'), Mage::helper('web')->__('Item Manager'));
    return $this;
 }   

 public function indexAction() {
  $this->_initAction()
   ->renderLayout();
 }
}