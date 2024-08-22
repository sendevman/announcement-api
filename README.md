# **Backend for Announcement Application**

## **Table of Contents**

1. [Project Overview](#project-overview)
2. [Features](#features)
3. [Technologies Used](#technologies-used)
4. [Getting Started](#getting-started)
   - [Prerequisites](#prerequisites)
   - [Installation](#installation)
5. [Database](#database)


## **Project Overview**

This backend application serves as the API for the Announcement Application, built with Laravel. It provides endpoints for managing and retrieving announcements, which are consumed by the frontend application.

## **Features**

- **Announcement Management:** Create, read, update, and delete announcements.
- **Markdown Support:** Announcement bodies support Markdown syntax and are rendered as HTML.
- **Pagination:** Efficiently handle large sets of announcements using pagination.
- **RESTful API:** Provides a RESTful interface for interaction.

## **Technologies Used**

- **Framework:** Laravel 10.x (or the latest stable version)
- **Database:** MySQL (or another relational database)
- **Languages:** PHP 8.x
- **Other Tools:** Composer, Laravel Artisan, Eloquent ORM

## **Getting Started**

### **Prerequisites**

- PHP 8.x or later
- Composer
- MySQL or another relational database
- Git (optional)

### **Installation**

1. **Clone the repository:**

   ```bash
   git clone https://github.com/sendevman/announcement-api.git
   cd announcement-backend
2. **Install dependencies:**

   ```bash
   git clone https://github.com/sendevman/announcement-api.git
   cd announcement-backend
3. **Set up environment variables:**

    Copy the .env.example file to .env:

4. **Generate the application key:**

   ```bash
   php artisan key:generate
5. **Run database migrations:**

    Set up your database by running the migrations:
   ```bash
   php artisan migrate
6. **Start the development server:**

    Run the following command to start the Laravel development server:
   ```bash
   php artisan serve
   ```
   The API will be available at http://localhost:8000.

### **Database**

You must install mysql and create announcement database.