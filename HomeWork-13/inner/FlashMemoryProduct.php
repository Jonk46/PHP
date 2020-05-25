<?php

class FlashMemoryProduct extends ShopProduct
{
    public $size;

    public function __construct($title, $authorName, $authorSurName, $price, $size)
    {
        parent::__construct(
            $title,
            $authorName,
            $authorSurName,
            $price
        );

        $this->size = $size;
    }

    public function getSummaryLine()
    {
        $summary = "&laquo;<b>{$this->title}</b>&raquo;";
        $summary .= ", <i>" . $this->getAuthor() . '</i>';
        $summary .= sprintf(', <small style="color:red;">Size: %d mb</small>', $this->getSize());

        return $summary;
    }

    public function getSize()
    {
        return $this->size;
    }
}
