<?php
class MyCompany_TechTalk_Model_Bannerslider extends Mage_Core_Model_Abstract{
    public function getImageCollection($catId){
        $categoryId = $catId;
        $imageCollection = Mage::getModel('slider/imagedetail')->getCollection()
            ->addFieldToFilter('status','1')
            ->addFieldToFilter('slider_id',$categoryId);
        return $imageCollection;
    }
    public function getCategoryCollection($catId){
        $categoryId = $catId;
        $categoryCollection = Mage::getModel('slider/imagecategory')->getCollection()
            ->addFieldToFilter('status','1')
            ->addFieldToFilter('slider_id',$catId);
        return $categoryCollection;
    }
}