<?php
class  MyCompany_TechTalk_Model_Resource_Imagedetail extends Mage_Core_Model_Mysql4_Abstract{
    public function _construct(){
        $this->_init('slider/imagedetail','detail_id');
    }
}