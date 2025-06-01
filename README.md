# Laravel Posts API with Repository Pattern

This project is a **RESTful API** for managing blog posts using **Laravel** and the **Repository Pattern**.

## Features

- Full CRUD operations for posts (Create, Read, Update, Delete)
- Clean architecture using **Repository Pattern**
- Form Request validation for clean and secure data input
- Pagination support for listing posts
- API Resources for consistent JSON responses

##  API Endpoints

| Method | Endpoint           | Description        |
|--------|--------------------|--------------------|
| GET    | /api/posts         | List posts (paginated) |
| GET    | /api/posts/{id}    | Get a single post  |
| POST   | /api/posts         | Create a new post  |
| PUT    | /api/posts/{id}    | Update a post      |
| DELETE | /api/posts/{id}    | Delete a post      |



##  Testing the API

You can use Postman to test the endpoints. Make sure to set:

```
Accept: application/json
```

##  How to Run

1. Clone the repository
2. Run `composer install`
3. Set up `.env` and database
4. Run `php artisan migrate`
5. Start the server with `php artisan serve`

---

##  Purpose of Using the Repository Pattern

The main goal of using the **Repository Pattern** in this project is to **separate business logic from data access logic**, allowing for:

- **Cleaner and more maintainable code** by isolating Eloquent queries from controllers.
- **Easier testing and mocking** during unit testing, since data access is abstracted behind interfaces.
- **Decoupling components**, making it simpler to switch or modify the data source in the future (e.g., from Eloquent to an external API or raw SQL).
- **Reusability of database logic** across multiple parts of the application.
- **Single responsibility principle**, where each class handles only one concern.

> This approach aligns with SOLID principles and promotes scalable and testable code architecture.
