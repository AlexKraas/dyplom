<?php
class MyCompany_TechTalk_Model_Imagecategory extends Mage_Core_Model_Abstract{
    public function _construct(){
        parent::_construct();
        $this->_init('slider/imagecategory');
    }
}