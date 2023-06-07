<?php
  include "./classes/db.class.php";
  include "./classes/product.class.php";
?>

<?php
  $id = $_GET['id'];
  $product = new Product();

  if ($product->deleteProduct($id)) {
    header('location: index.php');
  }

?>
