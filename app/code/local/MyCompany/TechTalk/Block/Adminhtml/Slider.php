<?php
class Vsourz_Bannerslider_Block_Adminhtml_Slider extends Mage_Adminhtml_Block_Widget_Grid_Container{
    public function __construct(){
        $this->_controller = 'adminhtml_category';
        $this->_blockGroup = 'slider';
        /* please not this is the block group the grid is called in this fashion: ($this->_blockGroup._.$this->_controller._.grid) */
        $this->_headerText = Mage::helper('slider')->__('Category Slider Manager');
        $this->_addButtonLabel = Mage::helper('slider')->__('Add Category Slider');
        parent::__construct();
    }
}