<?php

class Product {

    public static function all() {
        $db = Database::connect();
        $sql = "SELECT id, name, producer, category_path, price_display,
                       previous_price, aw_thumb, aw_image, aw_link, created_at
                FROM products ORDER BY id ASC";
        return $db->query($sql);
    }

    public static function find($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }
}
