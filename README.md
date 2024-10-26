# Blog Management System

## PHP Developer Internship Assignment

## Setup Instructions

### Prerequisites
- **PHP**: Ensure you have PHP 7.3 or higher installed.
- **Composer**: You will need Composer for dependency management.
- **MySQL**: Have a MySQL server running.
- **Web Server**: You can use Apache or Nginx for serving the application.

### Installation Steps

1. **Clone the Repository**
   ```bash
   git clone <repository-url>
   cd blog-management-system
   ```

2. **Install Dependencies**
   - If using Composer, run:
   ```bash
   composer install
   ```

5. **Configure Environment Variables**
   - Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
   - Open the `.env` file and update the following lines with your database credentials:
   ```
   DB_DATABASE=blog_management
   DB_USERNAME=<your_mysql_username>
   DB_PASSWORD=<your_mysql_password>
   ```

6. **Generate Application Key**
   - Run the following command to generate an application key:
   ```bash
   php artisan key:generate
   ```

7. **Run Migrations (if applicable)**
   - If you have additional migrations, run:
   ```bash
   php artisan migrate
   ```

8. **Serve the Application**
   - You can use the built-in PHP server for local development:
   ```bash
   php artisan serve
   ```
   - This will start the server at `http://localhost:8000`.

9. **Access the Application**
   - Open your web browser and navigate to `http://localhost:8000` to view the public blog.
   - To access the admin panel, navigate to `http://localhost:8000/admin`.

### Testing the Application
- You can test the functionalities by creating, editing, and deleting blog posts through the admin panel.
- Verify that the public-facing site displays posts correctly and that the search functionality works as intended.
---











---

## Functional Requirements

### Public Blog Frontend
- Users can view a list of blog posts with titles, summaries, and publish dates.
- Clicking on a title displays the full post content.
- Implement pagination for the post list.
- A search bar allows filtering by title or content.

### Admin Panel (Backend)
- Secure login system for admins.
- Implement CRUD operations for blog posts.
- Blog post fields: Title, Content, Author, Tags, Published Date.
- Optional: 'Draft' and 'Published' statuses.

### Tag and Category Management
- Admins can create, edit, and delete tags and categories.
- Each post can be associated with multiple tags and a single category.

---

## Bonus Tasks (Optional)
- Implement a WYSIWYG editor for blog content.
- Add a comment section on each public blog post.
- Create a REST API for CRUD operations.
- Use AJAX for asynchronous operations.