<?php
class Vsourz_Bannerslider_Block_Adminhtml_Slide extends Mage_Adminhtml_Block_Widget_Grid_Container{
    public function __construct(){
        $this->_controller = 'adminhtml_image';
        $this->_blockGroup = 'slider';

        $this->_headerText = Mage::helper('slider')->__('Slide Manager');
        $this->_addButtonLabel = Mage::helper('slider')->__('Add Slide');
        parent::__construct();
    }
}