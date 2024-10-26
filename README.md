# Blog Management System

## PHP Developer Internship Assignment

### Objective
This project aims to assess your skills in PHP programming, your familiarity with PHP frameworks, and your experience with MySQL databases. You will create a basic front-end and back-end system for managing blog content.

---

### Assignment Overview
Your task is to develop a simple Blog Management System featuring a public-facing front end for users and an admin back end for content management. Users will be able to view blog posts, while admins will have the capability to create, edit, delete, and manage those posts.

---

### Requirements

#### 1. Setup Instructions
- **Framework**: Use a PHP framework (e.g., Laravel, CodeIgniter, Symfony).
- **Database**: Set up MySQL as your database.
- **Instructions**: Provide clear setup instructions in this README.md file for running and testing the project.

#### 2. Functional Requirements

##### a) Public Blog Frontend
- Display a list of blog posts with title, summary, and publish date.
- Allow users to click on a blog post title to view the full content.
- Implement pagination for the blog post list.
- Include a search bar to filter blog posts by title or content.

##### b) Admin Panel (Backend)
- Implement a secure admin login system.
- Enable CRUD operations for blog posts in the admin panel.
- Each blog post should include:
  - Title
  - Content (bonus: rich text editor)
  - Author
  - Tags (support for multiple tags)
  - Published Date
- Optionally, add 'draft' and 'published' statuses for posts.

##### c) Tag and Category Management
- Allow admins to create, edit, and delete tags and categories.
- Enable each blog post to associate with multiple tags and a single category.

#### 3. Technical Requirements
- Utilize the chosen PHP framework’s MVC architecture.
- Validate user inputs (required fields, correct formats).
- Implement error handling (e.g., record not found, duplicate entries).
- Use prepared statements to prevent SQL injection attacks.
- Ensure a responsive front-end design for both the public blog and admin panel.

#### 4. Database Design
- Design a MySQL database schema with tables for posts, categories, tags, and users (for admin).
- Utilize primary keys, foreign keys, and indexes where necessary.
- Provide a `schema.sql` file with the database structure and sample data.

#### 5. Bonus Tasks (Optional)
- Implement a WYSIWYG editor (e.g., TinyMCE) for blog content in the admin panel.
- Add a comment section for each blog post (public side).
- Create a REST API for CRUD operations on blog posts, categories, and tags.
- Use AJAX for asynchronous actions like saving drafts or adding tags.

---

### Submission Instructions
1. Submit a link to your GitHub repository containing your project code.
2. Include a README.md file with instructions on setting up and running the project.
3. Ensure your code is well-documented, following best practices for PHP and MySQL.
4. (Optional) Highlight any bonus tasks or additional features you implemented in the README.md.

---

### Evaluation Criteria
- **PHP Coding Skills**: Quality and structure of code; logical implementation.
- **Framework Familiarity**: Correct usage of the framework’s features and adherence to the MVC pattern.
- **Database Skills**: Efficient database design, optimized queries, and data handling.
- **Front-end Design**: User-friendly, responsive design for both the public blog and admin panel.
- **Documentation**: Clarity of instructions and in-code comments.
- **Bonus Tasks**: Additional functionality and improvements in user experience.

---

### Getting Started

To get started, follow the instructions below:

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd blog-management-system
   ```

2. Install dependencies (if applicable):
   ```bash
   composer install
   ```

3. Set up the database:
   - Create a new MySQL database.
   - Run the `schema.sql` file to set up the required tables.

4. Configure the environment:
   - Update the `.env` file with your database credentials.

5. Run the application:
   - Start the server (specific command depends on the framework).
   - Visit `http://localhost:8000` (or your specified URL).

---

### License
This project is licensed under the MIT License - see the LICENSE file for details.

---

Feel free to customize the above README.md file to match your personal style or specific project details!


















































<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).