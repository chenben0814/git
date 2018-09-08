<?php
Mage::getModel('catalog/category')->getCollection();//所有分类集合
Mage::getModel('catalog/category')->load($productId);//指定ID产品信息
Mage::app()->getStore()->getId();//the current store id
Mage::app()->getStore()->getName();//the current store name
Mage::app()->getStore()->getCode();//the current store code
Mage::app()->getWebsite()->getName();//website name
Mage::getModel('core/session')->getSessionId();//session id
Mage::getModel('customer/session')->getCustomerId();//customer id
Mage::getModel('core/session')->getVisitorerId();//guest id
Mage::getSingleton('customer/session')->isLoggedIn();  //判断用户登录状态  $this->helper('customer')->isLoggedIn();
date("Y-m-d", Mage::getModel('core/date')->timestamp(time()));//获取当前时间
Mage::getModel('catalog/product_type_configurable')->getParentIdsByChild($childid);//parent's Ids
Mage::helper('core/http')->getRemoteAddr();//Ip地址字符串格式
Mage::helper('core/http')->getRemoteAddr(true);//Id地址的数值格式
$currentUrl = $this->helper('core/url')->getCurrentUrl();  //获取当前路径
Mage::app()->getStore()->getCurrentCurrencyCode();//获取当前货币code
Mage::app()->getLocale()->currency(Mage::app()->getStore()->getCurrentCurrencyCode())->getSymbol();//获取当前货币符号
Mage::getModel('sales/order')->load();//指定订单
Mage::getModel('customer/customer')->load();//指定用户
Mage::getModel('catalog/product')->load();//指定产品
Mage::registry('current_product')->getId();//当前产品ID

Mage::getModel('catalog/product')->getCollection();  //得到产品的集合
Mage::getModel('customer/customer')->getCollection();  //得到用户的集合
Mage::getModel('sales/order')->getCollection();  //得到订单集合
$associatedProductId = Mage::getModel('catalog/product_type_grouped')->getAssociatedProductIds($_product);//相关产品ID集合
$associatedProduct = Mage::getModel('catalog/product')->load($associatedProductId[0]);//相关某一产品信息

$products = Mage::getModel('catalog/category')->load($category_id)
->getProductCollection()
->addAttributeToSelect('*')
->addAttributeToFilter('status', 1)
->addAttributeToFilter('visibility', 4);//指定分类产品

$currCat = Mage::getModel('catalog/category')->load($id) ; //当前分类
$collection = Mage::getModel('catalog/category')->getCategories($currCat->getEntityId());//分类子分类

if($category->hasChildren()) {  //判断是否有子目录
 $ids = $category->getChildren();   //提取子目录id清单
 $subCategories = Mage::getModel('catalog/category')->getCollection();
 $subCategories->getSelect()->where("e.entity_id in ($ids)");  //提取指定目录ids的上当清单
 $subCategories->addAttributeToSelect('name');  //指定查找目录名称
 $subCategories->load();
 foreach ($subCategories AS $item) {
 echo " - " ;
 echo '<a href="'. $item->getUrl() . '">';   //获取目录链接
 echo $item->getName();   //获取目录名
 echo "</a>(";
 echo $item->getProductCount();   //获取目录下的产品数量
 //echo $item->getChildrenCount();  //获取目录下子目录数量
 echo ")";
 echo "<br/>";
 }
 }
 
 //获取URL地址
Mage::getUrl(地址);
Mage::getUrl(地址,array());
Mage::helper('core/url')->getCurrentUrl(); 
Mage::helper('core/url')->getHomeUrl();
Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_LINK);

(int)Mage::getModel('cataloginventory/stock_item')->loadByProduct($product)->getQty();//获取商品库存

//首页判断
$routeName = Mage::app()->getRequest()->getRouteName();
$identifier = Mage::getSingleton('cms/page')->getIdentifier();
if ($routeName == 'cms' && $identifier == 'home')
{
    //当前页是首页
}


//获取订单所有item
$quote = Mage::getModel('checkout/session')->getQuote();
$items = $quote->getAllActiveItem();
$data = array();
foreach($items as $key => $item){
     $data[$key] = $item->toArray(array('属性1','属性2','属性3'));      
}
return $data;

$productOrderedQty = Mage::helper('catalog/product')->getQuantityOrderedBySku($Sku);//获取产品销量

//获取指定目录产品
$products=Mage::getModel('catalog/category')->load($category_id)
    ->getProductCollection()  
    ->addAttributeToSelect('*')  
    ->addAttributeToFilter('status', 1)  
    ->addAttributeToFilter('visibility', 4);  


//得到可配置产品的下属所有产品
$product = Mage::getModel('catalog/product');  
$parent = $product->load(产品ID);  
$children = Mage::getModel('catalog/product_type_configurable')  
            ->getUsedProductCollection($parent);  
foreach($children as $child){  
    $child = $product->load($child->getId());  
    var_dump($child->getName());  
} 

//获取url参数
$url = $this->getRequest()->getParams(); 




































































