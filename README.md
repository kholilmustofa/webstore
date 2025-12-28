# 🚀 Laravel Webstore - E-Commerce Platform

A modern e-commerce web application built with Laravel 11, featuring a complete sales order management system with email notifications, queue processing, and Preline UI components.

## ✨ Features

### 🛒 Shopping Features
- Product catalog with search and filtering
- Shopping cart management with real-time updates
- Checkout process with customer information
- Multiple payment methods integration
- Shipping cost calculation with multiple couriers (JNE, J&T, SiCepat, Ninja Express, ID Express)

### 📦 Order Management
- Sales order creation and tracking
- Order state management (Pending, Progress, Completed, Cancelled)
- Automated order status transitions
- Sales order items tracking
- Order history and details

### 📧 Email Notification System
- **Order Confirmation** - Sent when order is created
- **Order Progress** - Sent when order is being processed
- **Shipping Notification** - Sent with tracking number when order is shipped
- **Order Completion** - Sent when order is delivered
- **Order Cancellation** - Sent when order is cancelled

### 🔄 Queue & Background Jobs
- Database-driven queue system
- Asynchronous email sending
- Event-driven architecture
- Background job processing for better performance

### 🎨 Frontend
- Livewire components for reactive UI
- Preline UI components (Tailwind CSS based)
- Responsive design
- Real-time cart updates
- Toast notifications
- Alpine.js for interactivity

### 🔐 Admin Panel
- Filament admin panel
- Product management
- Order management
- Inventory tracking
- Customer management

## 🛠️ Tech Stack

- **Framework**: Laravel 11
- **Frontend**: Livewire, Alpine.js, Tailwind CSS, Preline UI
- **Database**: MySQL
- **Queue**: Database driver
- **Admin Panel**: Filament
- **State Management**: Laravel Model States
- **Data Transfer Objects**: Laravel Data
- **Media Library**: Spatie Media Library
- **Activity Log**: Spatie Activity Log

## 📋 Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL

## 📦 Installation

### 1. Clone the repository
```bash
git clone <your-repository-url>
cd webstore
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Install NPM dependencies
```bash
npm install
```

### 4. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure your `.env` file
```env
APP_NAME="Your Store Name"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webstore
DB_USERNAME=root
DB_PASSWORD=

QUEUE_CONNECTION=database

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourstore.com
MAIL_FROM_NAME="${APP_NAME}"
```

### 6. Run migrations
```bash
php artisan migrate
```

### 7. Seed the database (optional)
```bash
php artisan db:seed
```

### 8. Build frontend assets
```bash
npm run build
# or for development with hot reload
npm run dev
```

### 9. Start the development server
```bash
php artisan serve
```

### 10. Start the queue worker (in a separate terminal)
```bash
php artisan queue:work --tries=3
# or for auto-reload during development
php artisan queue:listen
```

## 🎯 Pages

- **Homepage** - `/`
- **Product Catalog** - `/products`
- **Single Product** - `/product/{slug}`
- **Shopping Cart** - `/cart`
- **Checkout** - `/checkout`
- **Order Confirmation** - `/order-confirmed/{trx_id}`
- **Admin Panel** - `/admin`

## � Email Templates

All email templates are located in `resources/views/mail/orders/`:
- `created.blade.php` - Order confirmation email
- `progressed.blade.php` - Order in progress notification
- `delivery.blade.php` - Shipping notification with tracking
- `completed.blade.php` - Order completion notification
- `cancelled.blade.php` - Order cancellation notification

## 🔔 Events & Listeners

### Events
- `SalesOrderCreatedEvent` - Fired when a new order is created
- `SalesOrderProgressedEvent` - Fired when order status changes to progress
- `SalesOrderCompletedEvent` - Fired when order is completed
- `SalesOrderCancelledEvent` - Fired when order is cancelled
- `ShippingReceiptNumberUpdateEvent` - Fired when tracking number is added

### Listeners
- `SendOrderConfirmationEmailListener` - Sends order confirmation email (Queued)
- `GeneratePaymentLinkListener` - Generates payment link for the order

## 🔄 Order State Flow

```
Pending → Progress → Completed
   ↓
Cancel
```

### State Transitions
- **Pending to Progress**: `PendingToProgress`
- **Pending to Cancel**: `PendingToCancel`
- **Progress to Completed**: `ProgressToCompleted`

## 🚀 Usage

### Customer Flow
1. Browse products at `/products`
2. View product details
3. Add items to cart
4. Proceed to checkout at `/checkout`
5. Fill in customer information
6. Select shipping method and destination
7. Choose payment method
8. Confirm order
9. Receive order confirmation email
10. Track order status

### Admin Flow
1. Access admin panel at `/admin`
2. Manage products (create, edit, delete)
3. View and manage orders
4. Update order status
5. Add tracking numbers
6. Monitor inventory

## 🧪 Testing Email Templates

You can preview email templates by visiting:
```
/mailable
```

This route will show the latest order's email template.

## 📝 Preline UI License

This project uses components from Preline UI, which is licensed under:
- MIT License
- [Preline UI Fair Use License](https://preline.co/docs/license.html)

We respect and follow the licensing terms of Preline UI, including proper attribution.

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📜 License

This project is released under the MIT License. However, please note that the use of Preline UI in this project follows the Preline UI Fair Use License.

## � Known Issues

- Make sure to run queue worker for email notifications to work
- Ensure `.env` file has correct mail configuration

## 💡 Tips

- Use `php artisan queue:work` in production
- Use `php artisan queue:listen` during development for auto-reload
- Check `storage/logs/laravel.log` for debugging
- Use `php artisan queue:failed` to see failed jobs
- Retry failed jobs with `php artisan queue:retry all`

## 📞 Support

For issues and questions, please open an issue in the repository.

---

Made with ❤️ using Laravel & Preline UI

