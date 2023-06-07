<?php
include "./classes/db.class.php";
include "./classes/product.class.php";
?>

<?php include "./includes/header.php"; ?>

<?php
  if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $product = new Product();

    if($product->createProduct($title, $price, $description)) {
      header('location: index.php');
    }
  }
?>

<div class="container mt-5">
  <div class="row">
    <form method="post">
      <div class="col-12">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>

<?php include "./includes/footer.php"; ?>
