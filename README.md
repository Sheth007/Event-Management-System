Admin Panel – Event Management System
 
```
Features to Implement:

1. Admin Authentication
[] Admin login/logout (using Laravel).
[] Password reset functionality.

2. Dashboard
[] Show key stats:
[] Total Events
[] Total Users
[] Total Registrations
[] Recent events & registrations summary.

3. Category Management (CRUD)
[] Add/Edit/Delete categories.
[] Example: "Conference", "Workshop", "Webinar".

4. Event Management (CRUD)
[] Add/Edit/Delete events.
[] Fields: Title, Description, Category, Date, Time, Location, Image Upload.
[] Grid (Pagination + Search).

5. User Management
[] View list of registered users.
[] Show their registration details (if any).

6. Registration Management
[] List of registrations (user name, email, phone, event).
[] Filter by event.
[] Option to export registrations (CSV/Excel).
```
 
📌 Database Tables
admins (id, name, email, password, created_at, updated_at)
categories (id, name, created_at, updated_at)
events (id, title, description, category_id, date, time, location, image, created_at, updated_at)
users (id, name, email, password, created_at, updated_at)
registrations (id, user_id, event_id, name, email, phone, created_at, updated_at)