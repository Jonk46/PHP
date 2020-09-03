<?php


class SelectDataFromBD
{
    private static $conn;
    public static function select($query)
    {
        self::$conn = ConnectToBD::connect();
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $result = array();
            $stmt = self::$conn->prepare($query);
            $stmt -> execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $result[]=$row;
            }
            $stmt = null;
            return $result;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage(); // PDO перехватывает ошибку реализации запроса
            self::$conn = ConnectToBD::disconnect();
        }
        self::$conn = ConnectToBD::disconnect();
    }
}