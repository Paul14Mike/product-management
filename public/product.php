<?php
require '../config/config.php';
require '../core/Database.php';
require '../models/Product.php';
require '../controllers/ProductController.php';

if (!isset($_GET['id'])) {
    die('Missing ID');
}

$controller = new ProductController();
$controller->show((int)$_GET['id']);
