<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 1/29/19
 * Time: 2:22 PM
 */

class ShopProduct
{
public $title = "default product";
public $producerMainName = "main name";
public $producerFirstName = "first name";
public $price = 0;

public function __construct(string $title, string $producerMainName, string $producerFirstName, float $price)
{
    $this->title = $title;
    $this->producerMainName = $producerMainName;
    $this->producerFirstName = $producerFirstName;
    $this->price = $price;
}

//public function getNumberOfPages()
//{
//return $this->numPages;
//}
//
//public function getPlayLength()
//{
//    return $this->playLength;
//}

    public function getProducer()
{
    return $this->producerMainName . " " . $this->producerFirstName;
}
}

class ShopProductWriter{
    public function write(ShopProduct $shopProduct)
    {
        $str = $shopProduct->title . ": "
            . $shopProduct->getProducer() . " (" . $shopProduct->price . ")\n";
        print $str;
    }
}

class BookProduct extends ShopProduct
{
    public $numPages;

    public function __construct($title, $producerMainName, $producerFirstName, $price, $numPages = 0, $playLength = 0)
    {
        parent::__construct($title, $producerMainName, $producerFirstName, $price, $numPages, $playLength);
    }
}

$product1 = new ShopProduct("My Antonio", "Willa", "Cather", 5.99);

//$product2 = new ShopProduct();
//$product1->title = "My Antonia";
//$product1->producerMainName = "Cather";
//$product1->producerFirstName = "Willa";
//$product1->price = 5.99;

//$product2 -> title = "Catch 22";

//var_dump($product1);
//var_dump($product2);

//print "author: {$product1 -> producerFirstName} "."{$product1 -> producerMainName}\n";
//print "author: {$product1->getProducer()}\n";

$write = new ShopProductWriter();
$write->write($product1);









