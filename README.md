Admin Panel – Event Management System
 
```
Features to Implement:

1. Admin Authentication
[X] Admin login/logout (using Laravel).
[X] Only using sessions(added).
[X] Password reset functionality.

2. Dashboard
[X] Total Events
[X] Total Users
[X] Total Registrations
[X] Recent events & registrations summary.

3. Category Management (CRUD)
[X] Add/Edit/Delete categories.
[X] Example: "Conference", "Workshop", "Webinar".

4. Event Management (CRUD)
[X] Add/Edit/Delete events.
[X] Fields: Title, Description, Category, Date, Time, Location, Image Upload.
[X] Grid (Pagination + Search).

5. User Management
[X] View list of registered users.
[X] Show their registration details (if any).

6. Registration Management
[X] List of registrations (user name, email, phone, event).
[X] Filter by event.
[X] Option to export registrations (𝖢̶𝖲̶𝖵̶/Excel).

📌 Database Tables
[X] admins (id, name, email, password, created_at, updated_at)
[X] categories (id, name, created_at, updated_at)
[X] events (id, title, description, category_id, date, time, location, image, created_at, updated_at)
[X] users (id, name, email, password, created_at, updated_at)
[X] registrations (id, user_id, event_id, name, email, phone, created_at, updated_at)

🌐 External Libraries
[X] Laravel/Scout
[X] maatwebsite/excel
[X] LiveWire PowerGrid
```