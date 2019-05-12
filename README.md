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

The standard view extends de "layouts.app" template and shows the last 10 failed logins in a bootstrap table layout.  If you want to change the styling you can publish and adapt the view using :

```bash
php artisan vendor:publish --provider="Outsmartit\Failedlogins\FailedLoginsServiceProvider"
```

To change the number of shown failed logins, you can set the value of parameter "FAILEDLOGINS_LIST_MAX" in your .env file