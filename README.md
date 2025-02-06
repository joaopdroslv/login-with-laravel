# Laravel Authentication System

This is a simple Laravel authentication system that provides functionality for user registration, login, and logout. The controller handles the process of registering a new user, logging in with existing credentials, and logging out the authenticated user.

## Features

- User Registration
- User Login
- User Logout
- Validation with custom error messages

## Routes

The routes for authentication actions can be mapped to the methods in this controller:

- `GET /login`: Displays the login form (handled by `index` method).
- `GET /register`: Displays the registration form (handled by `register` method).
- `POST /register`: Registers a new user (handled by `create` method).
- `POST /login`: Logs the user in (handled by `store` method).
- `POST /logout`: Logs the user out (handled by `destroy` method).
