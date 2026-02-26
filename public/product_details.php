<?php
require '../config/config.php';

header('Content-Type: text/html; charset=utf-8');

if (!isset($_GET['id'])) {
    die('Missing ID');
}

$id = (int)$_GET['id'];

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_error) {
    die('DB Connection failed');
}
$db->set_charset('utf8mb4');

$stmt = $db->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die('Product not found.');
}

$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Product Details</title>
</head>
<body>

<a href="list_products_basic.php">Back to list</a>

<h3>Product Details (ID <?= $row['id'] ?>)</h3>

<table border="1">
<?php foreach ($row as $key => $value): ?>
<tr>
<th><?= $key ?></th>
<td>
<?php if (preg_match('~^https?://~', $value)): ?>
    <?php if (preg_match('~\.(jpg|jpeg|png|gif|webp)$~i', $value)): ?>
        <img src="<?= $value ?>" width="150">
    <?php else: ?>
        <a href="<?= $value ?>" target="_blank"><?= $value ?></a>
    <?php endif; ?>
<?php else: ?>
    <?= nl2br($value) ?>
<?php endif; ?>
</td>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>

