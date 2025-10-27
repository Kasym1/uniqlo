<?php

class RakutenShop extends BaseShop
{
    public function __construct()
    {
        parent::__construct('https://www.rakuten.com', 'Rakuten', 10);
    }

    public function getItems()
    {
        $items = [
            ['Футболка', '35$', 'https://www.uniqlo.com/us/en/products/E479158-000/00'],
        ];

        $products = [];
        foreach ($items as $item) {
            $products[] = new Product($item[0], $item[1], $item[2]);
        }
        return $products;
    }
}