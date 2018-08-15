<?php
class MyCompany_TechTalk_Block_Adminhtml_Category_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {
    public function __construct() {
        parent::__construct();
        $this->setId('category_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('slider')->__('Category Slider'));
    }
    protected function _beforeToHtml() {
        $this->addTab('form_section', array(
            'label' => Mage::helper('slider')->__('Category Slider Detail'),
            'title' => Mage::helper('slider')->__('Category Slider Detail'),
            'content' => $this->getLayout()->createBlock('slider/adminhtml_category_edit_tabs_form')->toHtml(),
        ));
        return parent::_beforeToHtml();
    }
}