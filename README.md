# Blog RESTful API

The Blog API is a Laravel-based RESTful API that provides functionality for managing and retrieving blog posts. It includes user authentication, authorization, and CRUD operations for blog posts.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Configuration](#configuration)
- [Authentication](#authentication)
- [Endpoints](#endpoints)
  - [1. Create a Blog Post](#1-create-a-blog-post)
  - [2. Retrieve All Blog Posts](#2-retrieve-all-blog-posts)
  - [3. Retrieve a Specific Blog Post](#3-retrieve-a-specific-blog-post)
  - [4. Update a Blog Post](#4-update-a-blog-post)
  - [5. Delete a Blog Post](#5-delete-a-blog-post)
- [Testing](#testing)
- [Documentation](#documentation)
- [Contributing](#contributing)
- [License](#license)

## Getting Started

### Prerequisites

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/) or [SQLite](https://www.sqlite.org/) (or another database of your choice)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/krixfega/Blog-RESTful-API.git

2) Change into the project directory
    cd blog-posts-api

3) Install dependencies
    composer install

4) Configuration
    a. Copy the .env.example file to create a new .env file:
            cp .env.example .env
    b. Configure the database connection and other settings in the .env file.
    c. Generate the application key:
            php artisan key:generate
    d. Migrate the database:
            php artisan migrate


## Authentication
Before making requests to the API, authenticate using the /login endpoint to obtain an authentication token. Include the token in the headers of subsequent requests for authorization.

## Endpoints
### 1. Create a Blog Post
Endpoint: POST /api/blog-posts

Request Format:
        {
            "title": "Title",
            "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            "author": "John Doe"
        }
Response:
        {
            "message": "Blog post created successfully",
            "data": {
                // Blog post details
            }
        }

### 2. Retrieve All Blog Posts
Endpoint: GET /api/blog-posts

Response:
        {
            "data": [
            // List of blog posts
            ]
        }
### 3. Retrieve a Specific Blog Post
Endpoint: GET /api/blog-posts/{id}

Response:
        {
            "data": {
            // Blog post details
            }
        }

### 4. Update a Blog Post
Endpoint: PUT /api/blog-posts/{id}

Request Format:
        {
            "title": "Updated Title",
            "content": "Updated content",
            "author": "Updated Author"
        }
Response: 
        {
            "message": "Blog post updated successfully",
            "data": {
                // Updated blog post details
            }
        }
### 5. Delete a Blog Post
Endpoint: DELETE /api/blog-posts/{id}

Response:
        {
            "message": "Blog post deleted successfully"
        }

## Testing
Test each API endpoint using tools like Postman. Ensure that authentication, request formats, and expected responses align with the provided documentation.

## Documentation
Detailed API documentation is available to guide developers on integrating the API into their applications.

## Contributing
Contributions are welcome! Feel free to fork the repository, create pull requests, and report issues

## License
This project is licensed under the MIT License.


