<?php

require_once __DIR__ . '/../Interface/ShopInterface.php';

class BaseShop implements ShopInterface
{
    protected $url;
    protected $name;
    protected $totalPage;

    public function __construct($url, $name, $totalPage)
    {
        $this->url = $url;
        $this->name = $name;
        $this->totalPage = $totalPage;
    }

    public function getItems()
    {
        return [];
    }

    public function getTotalPage()
    {
        return $this->totalPage;
    }
}