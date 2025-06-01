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
# posts-repository-pattern
