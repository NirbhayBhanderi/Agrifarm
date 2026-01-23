# Agri Farm — Marketplace for Farmers & Buyers

> Lightweight PHP/MySQL marketplace for agricultural products (admin, buyer, farmer).

## Project overview

This project is a simple marketplace built with PHP and MySQL. It provides separate interfaces for administrators, buyers, and farmers, supports product listings, bidding, returns, payments, email notifications, and a small weather integration.

Directory highlights:
- `admin_dashboard/` — admin pages and management tools
- `buyer_farmer-dashboard/buyer/` — buyer-facing UI and APIs
- `buyer_farmer-dashboard/farmer/` — farmer-facing UI and product management
- `email/` — mail configuration and helper functions (PHPMailer)
- `uploads/` — file upload target for product images
- `vendor/` — Composer dependencies (PHPMailer included)
- `Database.sql`, `Database.sql` and `init_database.php` — DB schema and init scripts

## Requirements

- PHP 7.4+ (or compatible PHP 8.x)
- MySQL / MariaDB
- Apache (XAMPP recommended on Windows) or another webserver
- Composer (to install PHP dependencies, if needed)

## Quick setup (development on Windows + XAMPP)

1. Place the project folder in your webserver document root (for XAMPP: `C:\xampp\htdocs\agrifarm`).
2. Create the database:
   - Import `Database.sql` using phpMyAdmin or run `init_database.php` if that script is intended to create tables.
3. Update DB credentials in `db.php` to match your MySQL credentials.
4. Configure email settings in `email/email_config.php` (SMTP host, username, password, port).
5. Ensure `uploads/` (and any other upload folders) are writable by the webserver.
6. If you change or need dependencies, run:

```bash
composer install
```

## How to access

- Main site: `http://localhost/agrifarm/` (or wherever you host the folder)
- Admin login: `admin_dashboard/admin_login.php`
- Buyer home: `buyer_farmer-dashboard/buyer/buyer_home.php`
- Farmer home: `buyer_farmer-dashboard/farmer/farmer_home.php`

## Database notes

- `Database.sql` contains the schema used by the app. There is also `alter_orders_payment.sql` for payment-related changes and `init_database.php` for scripted initialization.

## Email / Notifications

- The `email/` folder contains `email_config.php` and `email_functions.php` and uses PHPMailer found under `vendor/phpmailer/`.
- Use `email/test_email.php` or `admin_dashboard/test_email.php` (if present) to verify SMTP settings.

## Weather integration

- There are weather-related files: `buyer_farmer-dashboard/farmer/weather_config.php` and `WEATHER_SETUP_GUIDE.md`. Follow the guide to configure any external weather API keys.

## Payments

- Payment endpoints and handlers are under the buyer directory, e.g. `buyer_farmer-dashboard/buyer/process_payment.php`, `payment.php` and `payment_success.php`.

## Common troubleshooting

- Blank pages / errors: enable PHP error display or check server logs.
- DB connection errors: verify `db.php` credentials and that the database was imported.
- Composer autoload problems: run `composer install` in the project root.
- File upload errors: ensure `uploads/` is writable by the webserver user.

## Development notes

- Many UI files are plain PHP + CSS; feel free to refactor to a framework if you plan to scale.
- API endpoints are present (e.g., `products_api.php`, `cart_count_api.php`, `product_ratings_api.php`) — document and secure them before public use.

## Contributing

1. Fork the repository
2. Create a feature branch
3. Add tests where applicable
4. Open a pull request with a clear description

## Credits

- PHPMailer (bundled in `vendor/phpmailer/`) — used for SMTP/email delivery.

## License

Add your preferred license here (e.g., MIT). If none is present, include licensing terms before publishing.

---
If you'd like, I can update this README with example environment values, sample DB import commands, or convert it to a more detailed setup guide. Tell me what you'd like next.
