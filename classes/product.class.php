<?php

  class Product extends Database {
    public function getProducts() {
      $sql = $this->connect()->prepare("SELECT * FROM products");
      $sql->execute();

      return $sql->fetchAll();
    }

    public function getProductById(int $productId) {
      $sql = $this->connect()->prepare("SELECT * FROM products WHERE id = ?");
      $sql->execute([$productId]);

      return $sql->fetch();
    }

    public function createProduct($title, $price, $description) {
      $sql = $this->connect()->prepare("INSERT INTO products(title,price,description) VALUES(?,?,?)");
      return $sql->execute([$title, $price, $description]);
    }

    public function editProduct($title, $price, $description, $id) {
      $sql = $this->connect()->prepare("UPDATE products SET title=?, price=?, description=? WHERE id=?");
      return $sql->execute([$title, $price,$description, $id]);
    }

    public function deleteProduct($id) {
      $sql = $this->connect()->prepare("DELETE FROM products WHERE id=?");
      return $sql->execute([$id]);
    }
  }

?>
