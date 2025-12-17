# Public Complaint Reporting System (Laravel)

A web-based public complaint reporting system built with **Laravel**.  
This project demonstrates CRUD operations, role-based access control, data visualization, filtering, pagination, and dashboard analytics.

---

## ✨ Features

### 👤 User
- Submit public reports
- View reports with:
  - Search
  - Filter by type and province
  - Pagination
- View report status (pending, on process, done, rejected)

### 🧑‍💼 Staff
- View assigned reports based on province
- Update report status
- Dashboard with statistics and charts

### 🧑‍💻 Head Staff (Admin)
- User & staff management
- Assign staff to provinces
- Full access to reports
- Dashboard analytics

---

## 📊 Dashboard
- Total reports
- Responded vs unresponded reports
- Charts:
  - Report status distribution
  - Reports per province
- Percentage display via Chart.js tooltips

---

## 🛠️ Tech Stack

- **Backend:** Laravel
- **Frontend:** Blade + Tailwind CSS
- **Database:** MySQL

---

## 🚀 Installation (Local)

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
## 📸 Application Preview

### Login Page
![img1](https://github.com/asarimuh/Public-Complaint-Reporting-System/blob/a783780d4161171228c4ea0038763515df2e449b/screenshots/loginPage.png)

### Reports Page
![img2](https://github.com/asarimuh/Public-Complaint-Reporting-System/blob/a783780d4161171228c4ea0038763515df2e449b/screenshots/masyarakat-reportsIndex.png)

### Home Page
![img4](https://github.com/asarimuh/Public-Complaint-Reporting-System/blob/a783780d4161171228c4ea0038763515df2e449b/screenshots/headStaff-landingPage.png)

### Staff Management
![img3](https://github.com/asarimuh/Public-Complaint-Reporting-System/blob/a783780d4161171228c4ea0038763515df2e449b/screenshots/headStaff-userManagement.png)
