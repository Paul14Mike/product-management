<?php
require '../config/config.php';

header('Content-Type: text/html; charset=utf-8');

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_error) {
    die('DB Connection failed');
}
$db->set_charset('utf8mb4');

$sql = "SELECT id, name, producer, category_path, price_display, 
               previous_price, aw_thumb, aw_image, aw_link, created_at 
        FROM products ORDER BY id ASC";
$res = $db->query($sql);

?>
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
<th>Link</th><th>Date Added</th><th>Details</th>
</tr>

<?php while ($row = $res->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['producer'] ?></td>
<td><?= $row['category_path'] ?></td>
<td><?= $row['price_display'] ?></td>
<td><?= $row['previous_price'] ?></td>
<td>
<?php if (!empty($row['aw_thumb'])): ?>
    <img src="<?= $row['aw_thumb'] ?>">
<?php elseif (!empty($row['aw_image'])): ?>
    <img src="<?= $row['aw_image'] ?>">
<?php else: ?>
    -
<?php endif; ?>
</td>
<td>
<?php if (!empty($row['aw_link'])): ?>
    <a href="<?= $row['aw_link'] ?>" target="_blank">link</a>
<?php else: ?>
    -
<?php endif; ?>
</td>
<td><?= $row['created_at'] ?></td>
<td><a href="product_details.php?id=<?= $row['id'] ?>">Details</a></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>

