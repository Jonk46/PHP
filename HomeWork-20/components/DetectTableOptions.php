<?php


class DetectTableOptions
{
    public static function getOptions() {
        $options = array();
        if (isset($_POST['seller_submit'])) {
            $seller_city = $_POST['seller_city'];
            $seller_commission = $_POST['seller_commission'];
            $options['seller_city'] = $seller_city;
            $options['commission'] = $seller_commission;
        }
        if (isset($_POST['customer_submit'])) {
            $customer_city = $_POST['customer_city'];
            $customer_rating = $_POST['customer_rating'];
            $options['customer_city'] = $customer_city;
            $options['rating'] = $customer_rating;
        }
        return $options;
    }
}
