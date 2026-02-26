<?php

class ProductController {

    public function index() {
        $products = Product::all();
        require '../views/products/list.php';
    }

    public function show($id) {
        $result = Product::find($id);
        if ($result->num_rows === 0) {
            die('Product not found');
        }
        $product = $result->fetch_assoc();
        require '../views/products/details.php';
    }
}
