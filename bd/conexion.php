<?php
class DataBase
{
  public static function connect()
  {


    $db = new mysqli("localhost", "root","","negocio");
    $db->query("SET NAMES 'utf8'");
    return $db;
  }

}
?>