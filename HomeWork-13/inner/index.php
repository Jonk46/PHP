<?php

require_once __DIR__ . '/../functions.php';

require_once 'ShopProduct.php';
require_once 'BookProduct.php';
require_once 'CdProduct.php';
require_once 'FlashMemoryProduct.php';
require_once 'ShopProductWriter.php';

$book = new BookProduct(
    "PHP 7 for Begginers",
    "John",
    "Bridge",
    59.11,
    1121
);

$cd = new CdProduct(
    "Dark Paradise",
    "Lana",
    "Del Ray",
    29.99,
    52

);

$memo = new FlashMemoryProduct(
    "Transcend",
    "Тайбей",
    "Тайвань",
    57.99,
    1024
);


echo $book->getSummaryLine();
echo "<br>";
echo $cd->getSummaryLine();
echo "<br>";
echo $memo->getSummaryLine();
echo "<br><br>";

echo ShopProductWriter::write($book);
echo "<br>";
echo ShopProductWriter::write($cd);
echo "<br>";
echo ShopProductWriter::write($memo);

echo ShopProductWriter::save($book, $book->getSummaryLine());
echo ShopProductWriter::save($cd, $cd->getSummaryLine());
echo ShopProductWriter::save($memo, $memo->getSummaryLine());
