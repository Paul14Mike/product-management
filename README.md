
A simple PHP product management app with MVC structure. Browse and view product listings with details.

## Project Structure

```
wsbapp/
├── config/       # Database configuration
├── controllers/  # ProductController
├── core/         # Database class
├── models/       # Product model
├── public/       # Entry points (index.php, product.php, etc.)
├── views/        # Product list and detail templates
└── database_setup.sql
```

## Setup

1. Create the database:
   ```bash
   mysql -u root -p < database_setup.sql
   ```

2. Update `config/config.php` with your database credentials.

3. Point your web server to the `public/` directory.

## Requirements

- PHP 7+
- MySQL

