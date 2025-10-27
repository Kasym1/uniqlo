<?php

$shopName = 'Uniqlo';

switch ($shopName) {
    case 'Uniqlo':
        $userShop = new UniqloShop();
        break;
    case 'Amazon':
        $userShop = new AmazonShop();
        break;
    case 'Rakuten':
        $userShop = new RakutenShop();
        break;
    default:
        $userShop = null;
        break;
}

if ($userShop) {
    foreach ($userShop->getItems() as $product) {
        echo $product->getInfo() . PHP_EOL;
    }
    echo "Total pages: " . $userShop->getTotalPage() . PHP_EOL;
} else {
    echo "Магазин не найден.";
}