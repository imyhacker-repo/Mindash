# Boilerplate Dashboard Admin With SBADMIN2

### Description
Mindash is a Package Admin Dashboard From SBADMIN2, Only For Make Your Admin Dashboard Only (Default SBADMIN2), Make It Simply and Fast !

### How To Install ?
To install this package, you must have a new laravel project and make sure you have laravel / ui installed and auth: ui installed.
After finish install laravel, you must remove a Core Controller from laravel in 

> app/http/controllers/

Remove / Delete HomeController.php

After removing or delete the HomeController.php, install the Package.

```
composer required arikun/mindash
```

And don't forget paste the Provider in 

> config/app.php

paste 

```
Arikun\Mindash\MindashServiceProvider::class,
```

in 

```
/*
 * Package Service Providers...
 */

      {PASTE HERE}

/*
 * Application Service Providers...
 */
 ```

After paste, let's publish

```
php artisan vendor:publish
```

Select 

> Provider: Arikun\Mindash\MindashServiceProvider

### LAST 

And after select and finish install, you must install one more package again, is dsh

Open in terminal

> cd public

and clone from github.

```
https://github.com/imyhacker-repo/dsh
```

And Finish.
