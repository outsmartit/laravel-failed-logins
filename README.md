# laravel-failed-logins
Laravel package for registering failed logins into the database.

Based on solution described by [Brayniverse](https://brayniverse.com/monitoring-failed-login-attempts-with-laravel.html).

All failed logins attempts are logged in a table.

## Installation

```bash
composer require "outsmartit/failedlogins"
```

## Displaying the last logins

The last logins can be checked via url \failedlogins.  The default number of logins shown is 10, but can be set in your .env file via parameter 

## Publishing the view

```bash
vendor publish --provider=/outsmartit/failedlogins
```
