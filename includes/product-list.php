<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>title</th>
      <th>price</th>
      <th>description</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($product->getProducts() as $item) : ?>
      <tr>
        <td><?php echo $item->id; ?></td>
        <td><?php echo $item->title; ?></td>
        <td><?php echo $item->price; ?></td>
        <td><?php echo $item->description; ?></td>
        <td style="width: 7.6rem;">
          <a class="btn btn-primary btn-sm" href="edit-product.php?id=<?php echo $item->id; ?>" role="button">Edit</a>
          <a class="btn btn-danger btn-sm" href="delete-product.php?id=<?php echo $item->id; ?>" role="button">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
