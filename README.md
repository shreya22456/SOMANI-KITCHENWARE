# SOMANI KITCHENWARE - E-Commerce Platform

A comprehensive e-commerce website for selling premium kitchenware products online. Built with PHP, HTML, MySQL, and featuring a user-friendly interface with robust admin management tools.

## 📋 Project Overview

SOMANI KITCHENWARE is a full-featured e-commerce platform that allows customers to browse, purchase, and review a wide variety of kitchen products. The platform includes both customer-facing pages and comprehensive admin management tools for inventory, user, and order management.

**Primary Language**: PHP with HTML frontend  
**Database**: MySQL (SQL Server compatible)  
**Created**: March 29, 2025

## ✨ Features

### 🛒 Customer Features
- **Product Catalog** - Browse extensive collection of kitchenware items
- **Category Navigation** - Filter products by type:
  - Blenders, Bowls, Brass Items, Cookers, Cookware, Cups, Dishwashers
  - Dinner Sets, Glasses, Graters, Jugs, Juicers, Kettles
  - Knives, Mortars, Non-stick cookware, Plates, Rolling Pins
  - Sandwich Makers, Spoons, Steel items, Stoves, Wooden items
- **Product Gallery** - Visual showcase of all products
- **Shopping Cart** - Add, view, and manage cart items
- **User Registration & Login** - Secure authentication system
- **Order Purchase** - Complete checkout process
- **Customer Feedback** - Review and rate products
- **Customer Support** - Contact and service pages

### 👨‍💼 Admin Features
- **Item Management** - Add, edit, delete product items
- **User Management** - Manage customer registrations and logins
- **Purchase Tracking** - Monitor all customer orders
- **Feedback Management** - View and manage customer feedback
- **Inventory Control** - Track product availability
- **Admin Dashboard** - Centralized management interface

## 🏗️ Technology Stack

- **Frontend**: HTML5, CSS
- **Backend**: PHP 5.x+
- **Database**: MySQL / SQL Server
- **Server**: Apache/IIS
- **Version Control**: Git

## 📁 Project Structure

```
SOMANI-KITCHENWARE/
├── Frontend Pages (HTML)
│   ├── index.html                 # Landing page
│   ├── about.html                 # About us
│   ├── service.html               # Services
│   ├── gallery.html               # Product gallery
│   ├── gellery.html               # Alt gallery
│   ├── contact.html               # Contact page
│   └── assets/
│       ├── kitchen.png            # Logo
│       ├── kitchen1.jpg/png       # Product images
│       ├── kitchen2.jpg/png       # Product images
│       ├── back.png               # Background
│       └── kitchen1.jpg           # Banner
│
├── PHP Pages (Backend)
│   ├── Home Pages
│   │   ├── index.php              # Main dashboard
│   │   ├── home.php               # Home view
│   │   ├── h1.php                 # Home alternate
│   │   └── header.php / header2.php  # Header includes
│   │
│   ├── Product Pages (Category)
│   │   ├── blander.php
│   │   ├── bowl.php
│   │   ├── brass.php
│   │   ├── cooker.php
│   │   ├── cookpan.php
│   │   ├── cup.php
│   │   ├── dinnerset.php
│   │   ├── dishwasher.php
│   │   ├── glass.php / glass1.php
│   │   ├── grater.php
│   │   ├── jug.php
│   │   ├── juicer.php
│   │   ├── kettle.php
│   │   ├── knife.php
│   │   ├── mortar.php
│   │   ├── nonstick.php
│   │   ├── plate.php
│   │   ├── rolling pin.php
│   │   ├── sandwichmaker.php
│   │   ├── spoon.php
│   │   ├── steel.php
│   │   ├── stove.php
│   │   └── wooden.php
│   │
│   ├── Gallery Pages
│   │   ├── gallery.php
│   │   └── gellery.php
│   │
│   ├── Cart Management
│   │   ├── addtocart.php          # Add items to cart
│   │   ├── viewcart.php           # View cart items
│   │   ├── addtocartdelete.php    # Delete from cart (add-to-cart table)
│   │   ├── deletecart.php         # Clear cart
│   │   └── deletecartitem.php     # Delete specific cart item
│   │
│   ├── User Management
│   │   ├── registrationinsert.php # User registration form
│   │   ├── registrationsave.php   # Save registration data
│   │   ├── registrationmaster.php # View all registrations
│   │   ├── registrationdelete.php # Delete user account
│   │   ├── login.php              # Login form
│   │   ├── checklogin.php         # Verify login credentials
│   │   ├── logininsertsave.php    # Save new login
│   │   ├── loginedit.php          # Edit user login
│   │   ├── logineditsave.php      # Save login changes
│   │   ├── logindelete.php        # Delete login
│   │   └── loginmaster.php        # Login management dashboard
│   │
│   ├── Product Management (Admin)
│   │   ├── item.php               # Item view
│   │   ├── iteminsert.php         # Add new item form
│   │   ├── iteminsertsave.php     # Save new item
│   │   ├── itemedit.php           # Edit item form
│   │   ├── itemeditcon.php        # Update item
│   │   ├── itemsave.php           # Save item changes
│   │   ├── itemdelete.php         # Delete item
│   │   └── itemmaster.php         # Item management dashboard
│   │
│   ├── Feedback System
│   │   ├── feedbackinsert.php     # Feedback form
│   │   ├── feedbacksave.php       # Save feedback
│   │   ├── feedbackmaster.php     # View all feedback
│   │   └── feedbackdelete.php     # Delete feedback
│   │
│   ├── Purchase Management
│   │   ├── purchase.php           # Purchase tracking
│   │   └── purchasedelete.php     # Delete purchase record
│   │
│   ├── Shared Components
│   │   ├── footer.php             # Footer include
│   │   └── about.php              # About page logic
│   │   └── service.php            # Service page logic
│   │
│   ├── Database Configuration
│   │   ├── con.php                # Database connection
│   │   ├── con1.php               # Alt connection
│   │   ├── item.php               # Item queries
│   │   └── purchase.php           # Purchase queries
│   │
│   └── Additional Pages
│       └── index.php              # Alternative index
│
├── Database Files
│   ├── somani.mdf                 # SQL Server database
│   ├── somani_log.LDF             # Database transaction log
│   └── somani_kitchenware.sql     # SQL script
│
├── Documentation
│   ├── 1_frontpage.docx           # Front page
│   ├── 1_somani kitchenware front page.jpg  # Front page image
│   └── 2_title.docx               # Title page
│
└── Assets
    ├── img.jpg                    # Product/banner image
    ├── kitchen.png                # Kitchen logo
    ├── kitchen1.jpg / .png        # Kitchen images
    ├── kitchen2.jpg / .png        # Kitchen images
    ├── kitchenware.png            # Kitchenware icon
    └── back.png                   # Background image
```

## 🚀 Getting Started

### Prerequisites
- **Web Server**: Apache or IIS with PHP support
- **PHP**: Version 5.6 or higher
- **Database**: MySQL 5.5+ or SQL Server 2012+
- **Browser**: Modern web browser (Chrome, Firefox, Safari, Edge)

### Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/shreya22456/SOMANI-KITCHENWARE.git
   cd SOMANI-KITCHENWARE
   ```

2. **Set Up Database**
   ```bash
   # For MySQL
   mysql -u root -p < somani_kitchenware.sql
   
   # Or attach somani.mdf for SQL Server
   ```

3. **Configure Database Connection**
   - Edit `con.php` and `con1.php` with your database credentials:
   ```php
   $conn = new mysqli("localhost", "username", "password", "somani_db");
   ```

4. **Deploy to Web Server**
   ```bash
   # Copy all files to your web root directory
   cp -r SOMANI-KITCHENWARE/* /var/www/html/
   # or your server's document root
   ```

5. **Access the Application**
   ```
   http://localhost/SOMANI-KITCHENWARE/index.php
   ```

## 📋 Product Categories

| Category | Files | Description |
|----------|-------|-------------|
| Cookware | cooker.php, cookpan.php, nonstick.php | Cooking equipment |
| Dining | dinnerset.php, plate.php, bowl.php, cup.php | Dining essentials |
| Glassware | glass.php, glass1.php, jug.php | Glass products |
| Utensils | spoon.php, knife.php, grater.php, mortar.php | Kitchen utensils |
| Appliances | blander.php, juicer.php, dishwasher.php, kettle.php | Electrical items |
| Specialty | brass.php, steel.php, wooden.php, stove.php, sandwichmaker.php | Specialty items |

## 🔐 Security Features

- **User Authentication** - Secure login system with credential verification
- **Session Management** - User session tracking
- **Input Validation** - Form validation on registration and purchase
- **Database Security** - Connection encryption support
- **Admin Access Control** - Restricted admin-only pages

## 💾 Database Schema

### Main Tables:
- **Registration** - Customer registration information
- **Login** - User login credentials
- **Item** - Product inventory
- **Cart** - Shopping cart items (temporary)
- **Purchase** - Order records
- **Feedback** - Customer reviews and feedback

## 🎯 User Workflows

### Customer Workflow:
1. Register/Create Account
2. Browse Product Categories
3. View Product Gallery
4. Add Products to Cart
5. Review Cart
6. Complete Purchase
7. Submit Feedback
8. Contact Support

### Admin Workflow:
1. Login to Admin Panel
2. Manage Product Inventory (Add/Edit/Delete)
3. Manage User Accounts
4. Track Purchases
5. Review Customer Feedback
6. Monitor Operations

## 📞 Support & Contact

- **Contact Page**: `contact.html` / `service.php`
- **Feedback Form**: `feedbackinsert.php`
- **About Us**: `about.html` / `about.php`
- **Service Information**: `service.html` / `service.php`

## 🛠️ Development

### Adding New Product Category:
1. Create PHP file in root directory (e.g., `newproduct.php`)
2. Add category link to navigation in `header.php`
3. Update database items table with new products
4. Test product display and cart functionality

### Customization:
- Edit `header.php` and `footer.php` for branding changes
- Modify CSS styles in HTML files
- Update database connection strings in `con.php`

## 📊 Project Statistics

- **Total Files**: 100+
- **PHP Files**: 60+
- **HTML Files**: 5+
- **Database Records**: Multiple tables with indexed queries
- **Last Updated**: March 29, 2025
- **Status**: Active

## 👥 User Roles

### Customer
- Browse products by category
- Register and manage account
- Add items to shopping cart
- Place orders
- Submit product feedback
- Track purchase history

### Administrator
- Full inventory management
- User account management
- Order and purchase tracking
- Feedback review and management
- System monitoring

## 📈 Features Highlights

✅ **Multi-Category Product System**  
✅ **Complete E-Commerce Workflow**  
✅ **User Registration & Authentication**  
✅ **Shopping Cart Management**  
✅ **Order Processing**  
✅ **Feedback System**  
✅ **Admin Dashboard**  
✅ **Responsive Design**  
✅ **Database-Driven Content**  

## 📚 Additional Resources

- Project Documentation: `1_frontpage.docx`, `2_title.docx`
- Front Page Image: `1_somani kitchenware front page.jpg`
- Database SQL Script: `somani_kitchenware.sql`

## 🐛 Troubleshooting

**Database Connection Issues:**
- Verify database credentials in `con.php`
- Ensure database server is running
- Check database user permissions

**Page Not Found:**
- Verify file paths in `header.php` navigation
- Check web server document root configuration
- Ensure PHP short tags are enabled if needed

**Cart/Purchase Issues:**
- Clear browser cache and cookies
- Verify database cart tables exist
- Check session configuration

## 📄 License & Credits

This project uses templates and is available for educational and commercial use.

## 👨‍💻 Author

- **GitHub**: [@shreya22456](https://github.com/shreya22456)
- **Repository**: [SOMANI-KITCHENWARE](https://github.com/shreya22456/SOMANI-KITCHENWARE)

---

**Welcome to SOMANI KITCHENWARE - Your Premier Kitchenware Destination! 🍳**

For more information, visit our [GitHub repository](https://github.com/shreya22456/SOMANI-KITCHENWARE)
