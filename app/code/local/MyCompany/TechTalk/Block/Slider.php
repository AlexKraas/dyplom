<?php
class MyCompany_TechTalk_Block_Bannerslider extends Mage_Catalog_Block_Product_Abstract{
    public function getImages()
    {
        $catId = $this->getCategoryId();
        return $imageCollection = Mage::getModel('slider/slider')->getImageCollection($catId);
    }
    public function getCategoryData()
    {
        $catId = $this->getCategoryId();
        return $catCollection = Mage::getModel('slider/slider')->getCategoryCollection($catId);
    }
}