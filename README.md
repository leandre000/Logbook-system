# 📖 Logbook System

## 🌟 Overview
The **Logbook System** is a web-based application built with **PHP** and **MySQL** to digitize and manage logbook entries for organizations. Ideal for tracking activities, events, or tasks (e.g., security logs, maintenance records, or shift reports), it offers a centralized platform with a user-friendly **dashboard** for administrators and users. This system replaces paper-based logbooks, enhancing efficiency and accessibility. 🚀

## ✨ Key Features
- 📝 **Log Entry Management**: Create, edit, and delete log entries with details like timestamp, description, and category.
- 🔔 **Real-Time Dashboard**: Display recent logs, statistics, and activity summaries.
- 🔍 **Search & Filter**: Search logs by date, category, or user; filter by status or timeframe.
- 👤 **User Management**: Register and manage users with role-based access (admin, staff).
- 📊 **Reports Generation**: Export logs as CSV or PDF with customizable date ranges.
- 🔒 **Secure Authentication**: Login system with encrypted credentials.
- 🕒 **Timestamp Tracking**: Automatically record entry creation and update times.
- 📱 **Responsive Design**: Bootstrap-based UI for seamless use on desktop and mobile.

## 🛠️ Prerequisites
- ☕ **PHP 7.4** or later
- 🗄️ **MySQL 5.7** or later
- 📦 **Apache** or **Nginx** web server
- 🌐 **Composer** (optional, for dependency management)
- 🌍 **Modern browser** (Chrome, Firefox, Edge)

## 🚀 Installation

### Backend Setup (PHP & MySQL)
1. **Clone the Repository** 📂
   ```bash
   git clone https://github.com/yourusername/logbook-system.git
   cd logbook-system
   ```

2. **Configure Database** 🗄️
   - Create a MySQL database named `logbook_db`.
   - Import `database/logbook_db.sql` into the database.
   - Update `config/db.php` with your database credentials:
     ```php
     <?php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'your_username');
     define('DB_PASS', 'your_password');
     define('DB_NAME', 'logbook_db');
     ?>
     ```

3. **Install Dependencies** 📦
   - If using Composer, run:
     ```bash
     composer install
     ```
   - Ensure PHP extensions (`mysqli`, `pdo_mysql`) are enabled.

4. **Set Up Web Server**
   - Place the project folder in your web server’s root (e.g., `htdocs` for XAMPP).
   - Ensure write permissions for the `uploads` folder (if used for attachments).

5. **Run the Application** 🏃
   - Start Apache and MySQL (e.g., via XAMPP/WAMP).
   - Access the app at `http://localhost/logbook-system`.


## 🎮 Usage
1. **Admin Login** 🔐
   - Navigate to `http://localhost/logbook-system`.
   - Default credentials (update in production):
     - **Username**: admin
     - **Password**: admin123

2. **Manage Logs** 📝
   - Add new log entries via the "Create Log" form (include description, category, etc.).
   - Edit or delete logs from the dashboard.
   - Use search and filter options to find specific logs.

3. **Dashboard** 📊
   - View recent logs, total entries, and activity trends.
   - Access quick links to add logs, manage users, or generate reports.

4. **Generate Reports** 📈
   - Export logs by date range or category in CSV/PDF format.

5. **Key Endpoints** 📡
   - **Log List**: `GET /api/logs`
   - **Add Log**: `POST /api/logs/add`
     ```json
     {
       "title": "Security Check",
       "description": "Night shift patrol completed",
       "category": "Security",
       "user_id": 1
     }
     ```
   - **Health Check**: `GET /health`

## 📂 Project Structure
```
logbook-system/
├── config/
│   ├── db.php              # Database configuration ⚙️
├── css/                    # Stylesheets (Bootstrap, custom CSS) 🎨
├── js/                     # JavaScript (jQuery) 🛠️
├── uploads/                # Storage for attachments (if enabled) 📁
├── src/
│   ├── controllers/        # Request handling logic ⚙️
│   ├── models/             # Database models (Log, User) 📋
│   ├── views/              # UI templates (PHP/HTML) 📄
├── database/
│   ├── logbook_db.sql      # Database schema 🗄️
├── index.php               # Entry point 🌐
├── README.md               # This file 📄
├── composer.json           # PHP dependencies (optional) 📦
```

## 🤝 Contributing
Contributions are welcome! To contribute:
1. 🍴 Fork the repository.
2. 🌿 Create a branch: `git checkout -b feature/your-feature`.
3. ✍️ Commit changes: `git commit -m "Add your feature"`.
4. 🚀 Push branch: `git push origin feature/your-feature`.
5. 📬 Open a pull request.

Please adhere to coding standards and include tests for new features.

## 📜 License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

🌍 Digitize your logs with ease! Happy coding! 🚀
