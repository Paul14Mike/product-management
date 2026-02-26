CREATE DATABASE IF NOT EXISTS wsbapp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE wsbapp;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    producer VARCHAR(255),
    category_path VARCHAR(255),
    price_display VARCHAR(50),
    previous_price VARCHAR(50),
    aw_thumb TEXT,
    aw_image TEXT,
    aw_link TEXT,
    created_at DATETIME,
    INDEX idx_id (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

