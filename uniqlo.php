<?php

class Uniqlo
{
    public $url;
    public $name;
    public $price;

    public function __construct($url, $name, $price)
    {
        $this->url = $url;
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo()
    {
        return $this->url - $this->name - $this->price;
    }
}

class BaseShop implements ShopInterface
{
    protected $url;
    protected $name;
    protected $totalPage;

    public function __construct($url, $name, $totalPage){
        $this->url = $url;
        $this->name = $name;
        $this->totalPage = $totalPage;
    }

    public function getItems()
    {
    }

    public function getTotalPage()
    {
        return $this->totalPage;
    }
}

class AmazonShop extends BaseShop
{
}

class UniqloShop extends BaseShop
{
}

class RakutenShop extends BaseShop
{
}

