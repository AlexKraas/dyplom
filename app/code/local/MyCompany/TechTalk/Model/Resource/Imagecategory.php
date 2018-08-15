<?php
class  MyCompany_TechTalk_Model_Resource_Imagecategory extends Mage_Core_Model_Mysql4_Abstract{
    public function _construct(){
        $this->_init('slider/imagecategory','slider_id');
    }
}