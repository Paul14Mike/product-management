<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Product List</title>
</head>
<body>

<h2>Products</h2>

<table border="1">
<tr>
<th>ID</th><th>Name</th><th>Producer</th><th>Category</th>
<th>Price</th><th>Previous Price</th><th>Thumbnail</th>
<th>Link</th><th>Date</th><th>Details</th>
</tr>

<?php while ($row = $products->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['producer'] ?></td>
<td><?= $row['category_path'] ?></td>
<td><?= $row['price_display'] ?></td>
<td><?= $row['previous_price'] ?></td>

<td>
<?php if ($row['aw_thumb']): ?>
<img src="<?= $row['aw_thumb'] ?>" width="80">
<?php elseif ($row['aw_image']): ?>
<img src="<?= $row['aw_image'] ?>" width="80">
<?php else: ?>-
<?php endif; ?>
</td>

<td>
<?php if ($row['aw_link']): ?>
<a href="<?= $row['aw_link'] ?>" target="_blank">link</a>
<?php else: ?>-
<?php endif; ?>
</td>

<td><?= $row['created_at'] ?></td>
<td><a href="product.php?id=<?= $row['id'] ?>">Details</a></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>
