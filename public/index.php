<?php
require '../config/config.php';
require '../core/Database.php';
require '../models/Product.php';
require '../controllers/ProductController.php';

$controller = new ProductController();
$controller->index();
