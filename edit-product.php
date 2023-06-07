<?php
  include "./classes/db.class.php";
  include "./classes/product.class.php";
?>

<?php include "./includes/header.php"; ?>

<?php
  $id = $_GET['id'];

  $product = new Product();

  $item = $product->getProductById($id);

  if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if ($product->editProduct($title, $price, $description, $id)) {
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
          <input type="text" name="title" id="title" class="form-control" value="<?php echo $item->title; ?>">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" id="price" class="form-control" value="<?php echo $item->price; ?>">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description"><?php echo $item->description; ?></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>

<?php include "./includes/footer.php"; ?>
