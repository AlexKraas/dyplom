<?php
$categories = array(
    array(
        'slider_title' => 'default',
        'status' => '1'
    ),
);
foreach ($categories as $category){
    $model = Mage::getModel('slider/imagecategory')->setData($category)->save();
}