<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Product Details</title>
</head>
<body>

<a href="index.php">Back to list</a>

<h3>Product Details (ID <?= $product['id'] ?>)</h3>

<table border="1">
<?php foreach ($product as $key => $value): ?>
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
