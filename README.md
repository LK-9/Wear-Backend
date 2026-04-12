# Wear - E-Commerce Website

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

## Description

Wear is a full-featured e-commerce platform built with Laravel, featuring user authentication, product catalog, shopping cart, checkout, and order management.

## Features

- User registration and authentication (Laravel Breeze)
- Product catalog with categories, search, and filtering
- Shopping cart with add/update/remove functionality
- Secure checkout process with order confirmation
- Order history and management
- Product reviews and ratings
- Wishlist functionality
- Responsive design with Tailwind CSS

## Technologies

- Laravel 11.x
- MySQL / PostgreSQL
- Blade Templates, Tailwind CSS, JavaScript
- Pest for testing

## Installation

1. Clone the repo: `git clone https://github.com/yourusername/wear.git`
2. Install dependencies: `composer install && npm install`
3. Configure `.env` and run `php artisan key:generate`
4. Migrate database: `php artisan migrate`
5. Build assets: `npm run build`
6. Start server: `php artisan serve`

## Usage

- Browse products and add to cart
- Register/login to checkout
- View order history in user dashboard

## License

MIT License

### For Customers
1. **Browse Products**: Navigate through categories or use the search functionality
2. **View Product Details**: Click on any product to see detailed information, images, and reviews
3. **Add to Cart**: Select products and add them to your shopping cart
4. **Checkout**: Proceed to checkout, enter shipping information, and complete payment
5. **Track Orders**: View your order history and current order status

### For Administrators
- Access the admin panel (if implemented) to manage products, categories, and orders
- Monitor user activity and manage content

## 📁 Project Structure

```
wear/
├── app/
│   ├── Http/
│   │   ├── Controllers/     # Application controllers
│   │   └── Requests/        # Form request validation
│   ├── Models/              # Eloquent models
│   └── Providers/           # Service providers
├── database/
│   ├── migrations/          # Database migrations
│   ├── factories/           # Model factories
│   └── seeders/             # Database seeders
├── public/                  # Public assets
├── resources/
│   ├── css/                 # Stylesheets
│   ├── js/                  # JavaScript files
│   └── views/               # Blade templates
├── routes/                  # Route definitions
├── tests/                   # Test files
└── config/                  # Configuration files
```

## 🧪 Testing

Run the test suite using Pest:

```bash
php artisan test
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **Your Name** - *Initial work* - [Your GitHub](https://github.com/yourusername)

## 🙏 Acknowledgments

- Laravel Framework
- Laravel Breeze for authentication
- Tailwind CSS for styling
- All contributors and the open-source community

## 📞 Support

If you have any questions or need help, please open an issue on GitHub or contact the maintainers.

---

**Note**: This project is a demonstration of Laravel e-commerce capabilities and may require additional configuration for production deployment.