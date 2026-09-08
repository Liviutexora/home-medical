# Logistiq - Logistics and Transportation Laravel 12.4v Template - Installation Guide

Welcome to Laravel 12.4v Logistics Template! This guide will walk you through the steps required to get the project up and running on your local machine.

---

## 🧰 Requirements

- **PHP Version:** >= 8.2
- **Composer Version:** >= 2.2
- **Recommended Servers:** XAMPP, WAMP, or LAMPP

---

## ⚙️ Installation Steps

### 1. Install a Local Server

Make sure you have XAMPP/WAMP/LAMPP installed and running on your system. If your current PHP version is **greater than 8.2**, you may skip this step.

---

### 2. Install Composer

Ensure [Composer](https://getcomposer.org/) is installed and available in your terminal. You can check this by running:

```bash
composer --version
```

---

### 3. Install Dependencies

Run the following command to install all required PHP packages:

```bash
composer install
```

Alternatively:

```bash
composer i
```

---

### 4. Now Setup All Project


```bash
php artisan setup
```

### 5. Start Development Server

To start the Laravel server:

```bash
php artisan serve
```

Access your site at: [http://localhost:8000](http://localhost:8000)

Want to use a different port? Example:

```bash
php artisan serve --port=8001
```

---

## ✍️ Customizing the Template

Before deploying, make sure to **edit the demo content** and insert your own content.

We recommend using a code editor like:

- [Visual Studio Code](https://code.visualstudio.com/)
- [Sublime Text](https://www.sublimetext.com/)

Replace all placeholder texts, images, and settings according to your brand or use case.

---

## 📄 License

This project is provided under a commercial license. Please refer to `license.txt` for full terms.

---

Happy Coding! 🚀