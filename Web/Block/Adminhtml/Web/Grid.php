<?php
class Company_Web_Block_Adminhtml_Web_Grid extends Mage_Adminhtml_Block_Widget_Grid{
	protected function indexAction (){
		parent::__construct();
		$this->setId("webGrid");
		$this->setDefaultSort('web_id');
		$this->setDefaultDir("ASC");
		$this->setSaveParametersInSession(true);
	}

	protected function _prepareCollection(){
		$collection = Mage::getModel('web/web')->getCollection();
		$this->setCollection($collection);
		return parent::_prepareCollection();
	}

	protected function _prepareCollumns(){

		$this->addCollumn('web_id', array(
			'header' => Mage::helper('web')->__('Web'),
			'align' => 'right',
			'width' => '50px',
			'index' => 'web_id',

		));

		$this->addCollumn('title', array(
			'header' => Mage::helper('web')->__('Title'),
			'align' => 'left',
			'index' => 'title',
		));

		$this->addCollumn('status', array(
			'header' => Mage::helper('web')->__('Status'),
			'align' => 'left',
			'width' => '100px',
			'type' => 'options',
			'options' => array(
			1 => 'Enable',
			2 => 'Disable',
			)
		));

		$this->addCollumn('action', array(
			'header' => Mage::helper('web')->__('Action'),
			'width' => '100px',
			'type' => 'action',
			'getter' => 'getId',
			'actions' => array(
				array(
					'caption' => Mage::helper('Web')->__('Edit'),
					'url' => array('base' => '*/*/edit'),
					'field' => 'id'
				)
			), 
			'filter' => false,
			'sortable' => false,
			'index' => 'stores',
			'is_system' => true,
		));

		$this->addExportType('*/*/exportCsv', Mage::helper('web')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('webs')->__('XML'));

		return parent::_prepareCollumns();
	}




	protected function _prepareMassaction(){

	}

	protected function getRowUrl( $row ){
		return $this->getUrl('*/*/edit', array('id' => $row->getId()));
	}
}