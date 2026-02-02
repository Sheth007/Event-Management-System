# Event Management System - Admin Panel

This is the **Admin Panel** for an Event Management System built with **Laravel**. Below is the list of features and tasks that have been implemented for the project.

---

## ✔ Features to Implement

### 1. **Admin Authentication**
- [x] Admin login/logout using Laravel
- [x] Authentication via sessions
- [x] Password reset functionality for admins

### 2. **Dashboard**
- [x] Display total events
- [x] Display total users
- [x] Display total registrations
- [x] Show recent events and registrations summary

### 3. **Category Management (CRUD)**
- [x] Add categories
- [x] Edit categories
- [x] Delete categories
- [x] Example categories: "Conference", "Workshop", "Webinar"

### 4. **Event Management (CRUD)**
- [x] Add events
- [x] Edit events
- [x] Delete events
- [x] Event fields: 
  - Title
  - Description
  - Category
  - Date
  - Time
  - Location
  - Image upload
- [x] Display events in a grid with pagination
- [x] Search functionality for events

### 5. **User Management**
- [x] View registered users
- [x] Show user registration details (if any)

### 6. **Registration Management**
- [x] List registrations (user name, email, phone, event)
- [x] Filter registrations by event
- [x] Export registrations to **CSV** or **Excel**

---

## ✔ Database Tables

- [x] **Admins**: Stores admin information
  - Fields: `id`, `name`, `email`, `password`, `created_at`, `updated_at`
- [x] **Categories**: Stores event categories
  - Fields: `id`, `name`, `created_at`, `updated_at`
- [x] **Events**: Stores event information
  - Fields: `id`, `title`, `description`, `category_id`, `date`, `time`, `location`, `image`, `created_at`, `updated_at`
- [x] **Users**: Stores user information
  - Fields: `id`, `name`, `email`, `password`, `created_at`, `updated_at`
- [x] **Registrations**: Stores user event registration information
  - Fields: `id`, `user_id`, `event_id`, `name`, `email`, `phone`, `created_at`, `updated_at`

---

## ✔ External Libraries

- [x] **Laravel/Scout**: Full-text search functionality
- [x] **maatwebsite/excel**: For exporting registrations to **CSV** or **Excel**

---