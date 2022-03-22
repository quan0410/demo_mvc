

<?php
class DB
{
    private static $connect = NULL;
    public static function getConnect() {
      if (!isset(self::$connect)) {
        try {
          self::$connect = new PDO('mysql:host=localhost;dbname=demo_mvc', 'root', '');
          self::$connect->exec("SET NAMES 'utf8'");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$connect;
    }
}
