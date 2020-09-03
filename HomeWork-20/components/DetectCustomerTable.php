<?php


class DetectCustomerTable extends DetectTableOptions
{
    public static function detect_customer()
    {
        $options = self::getOptions();
        if(!isset($_POST['customer_submit']) || ($_POST['customer_city'] == "All" && $_POST['customer_rating'] == "All")) {
            return $sql = "SELECT customers.customer_id, customers.customer_name,
                           customers.customer_city, customers.rating, sellers.seller_id, sellers.seller_name
                           FROM customers
                           INNER JOIN sellers ON customers.seller_id=sellers.seller_id
                           ORDER BY seller_id ASC, customer_id;";
        } else {
            $customer_city = $options['customer_city'];
            $rating = $options['rating'];
            $custCityWhere = ($customer_city <> "All") ? " `customer_city` = '{$customer_city}' " : '';
            $custRateWhere = ($rating <> "All") ? " `rating` = $rating " : '';
            $custAnd = ($customer_city <> "All" and $rating <> "All") ? " AND " : '';
            return $sql = "SELECT customers.customer_id, customers.customer_name,
                           customers.customer_city, customers.rating, sellers.seller_id, sellers.seller_name
                           FROM customers
                           INNER JOIN sellers ON customers.seller_id=sellers.seller_id 
                           WHERE ($custCityWhere $custAnd $custRateWhere)
                           ORDER BY seller_id ASC, customer_id;";
        }
    }
}