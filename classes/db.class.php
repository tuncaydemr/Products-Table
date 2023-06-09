<?php
  class Database {
    protected function connect() {
      try {
        $db = new PDO("mysql:host=localhost;dbname=products_db;", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $db;
      } catch (PDOException $err) {
        echo $err->getMessage();
      }
    }
  }
