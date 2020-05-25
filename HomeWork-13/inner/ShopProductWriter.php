<?php

class ShopProductWriter
{
    public static function write(ShopProduct $product)
    {
        return sprintf(
            '%s: %s; Price: <span style="color:green">%01.2f$</span>',
            $product->title,
            $product->getAuthor(),
            $product->price
        );
    }

    public static function save(ShopProduct $product, $info)
    {

        if ($product instanceof BookProduct) {
            $file = "book.txt";
            self::saveFile($info, $file);
        } else if ($product instanceof CdProduct) {
            $file = "cd.txt";
            self::saveFile($info, $file);
        } else if ($product instanceof FlashMemoryProduct) {
            $file = "memory.txt";
            self::saveFile($info, $file);
        }
    }

    private static function saveFile($info, $file)
    {
        file_put_contents($file, $info, FILE_APPEND | LOCK_EX);
    }
}
