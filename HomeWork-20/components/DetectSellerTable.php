<?php


class DetectSellerTable extends DetectTableOptions
{
    public static function detect_seller()
    {
        $options = self::getOptions();
        if(!isset($_POST['seller_submit']) || ($_POST['seller_city'] == "All" && $_POST['seller_commission'] == "All")) {
            return $sql = "SELECT * FROM `sellers` ORDER BY `seller_id`";
        } else {
            $seller_city = $options['seller_city'];
            $comission = $options['commission'];
            $sellCityWhere = ($seller_city <> "All") ? " `seller_city` = '{$seller_city}' " : '';
            $sellComWhere = ($comission <> "All") ? " `commission` = $comission " : '';
            $sellAnd = ($seller_city <> "All" and $comission <> "All") ? " AND " : '';
            return $sql = "SELECT * FROM `sellers` WHERE $sellCityWhere $sellAnd $sellComWhere ORDER BY `seller_id`";
        }
    }
}