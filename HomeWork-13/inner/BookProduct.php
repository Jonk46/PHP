<?php

class BookProduct extends ShopProduct
{
    public $pagesNum;

    public function __construct($title, $authorName, $authorSurName, $price, $pagesNum)
    {
        parent::__construct(
            $title, $authorName, $authorSurName, $price
        );

        $this->pagesNum = $pagesNum;
    }

    public function getSummaryLine()
    {
        $summary = parent::getSummaryLine();
        $summary .= sprintf(', <small style="color:red;">Pages: %d</small>', $this->getNumberOfPages());
        
        return $summary;
    }

    public function getNumberOfPages()
    {
        return $this->pagesNum;
    }

}
