# 📚 Book Borrowing Platform

A comprehensive book borrowing platform built with Laravel. This project allows users to browse, borrow, and read books, while admins can manage the system, including users and books, through a dedicated dashboard.

## 🚀 Features

- **User Role-Based Dashboard:** The application displays different dashboards based on the user's role:
  - **Users:** Can browse the collection, borrow books, and view their reading history.
  - **Admins:** Have full control over the system, including managing users, books, and performing CRUD (Create, Read, Update, Delete) operations.

- **Authentication:** Secure login and registration system to ensure only authorized access to the platform.

- **Book Management:** A catalog of books with options to browse, search, and filter based on categories and availability.

- **Borrowing System:** Users can borrow books and keep track of their borrowed items.

- **Admin Management:** Admins can add new books, edit existing details, delete books, and manage user accounts.

## 🛠️ Technologies Used

- **Backend:** Laravel - A PHP framework that provides a robust backend structure for building the application.
- **Frontend:** Bootstrap - Ensures the application is responsive and user-friendly.
- **Database:** MySQL - To store user data, book details, and borrowing records.

## 📑 Setup Instructions

### Prerequisites

- PHP (>= 8.0)
- Composer
- Laravel
- Node.js & NPM
- MySQL

### Role Management
User: Has access to features like browsing books, borrowing, and viewing their own history.
Admin: Can manage books and users, perform CRUD operations, and view all borrowing activities

##  Project Structure
app/Models: Contains the Eloquent models for Book, User, and other entities.
app/Http/Controllers: Manages the logic for users and admins, such as BookController, UserController, AdminController.
resources/views: Blade templates for rendering the user interface, including different views for users and admins.
routes/web.php: Defines the application's routes and their corresponding controllers.
##  Contributing
Contributions are welcome! Please fork the repository and create a pull request for any feature additions, improvements, or bug fixes.

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourusername/book-borrowing-platform.git
