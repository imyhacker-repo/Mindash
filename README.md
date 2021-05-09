# Boilerplate Dashboard Admin With SBADMIN2

### Description
Mindash is a Package Admin Dashboard From SBADMIN2, Only For Make Your Admin Dashboard Only (Default SBADMIN2), Make It Simply and Fast !

### How To Install ?
To install this package, you must have a new laravel project and make sure you have laravel / ui installed and auth: ui installed.
After finish install laravel, you must remove a Core Controller from laravel.


```
composer required laravel/ui
```

And Make Auth

```
php artisan ui:auth
```

After finish install auth you have a fresh login page default ui laravel with no style from bootstrap (plain html) 

![Screenshot at 2021-05-08 13-55-41](https://user-images.githubusercontent.com/45889833/117530023-1fd04500-b005-11eb-964b-b9c9e8dce3fe.png)

### Now Install The Packages!
Before install the packages, you must delete Folder Auth in laravel 
this folder in

> resource/views/auth

After deleted, the next step is to install the packages

```
composer require arikun/sabmin
```

Wait a second...

After finish, paste to config/app.php in 

```
Arikun\Sabmin\SabminServiceProvider::class,
```

```
/*
 * Package Service Providers...
 */
      {PASTE HERE}
/*
 * Application Service Providers...
 */
```

### LAST 
Last insert command vendor publish to publish the Auth UI Custom

```
php artisan vendor:publish 
```

![Screenshot at 2021-05-08 14-06-52](https://user-images.githubusercontent.com/45889833/117530320-ab96a100-b006-11eb-8d0c-16ffd13d2062.png)

And Select Arikun\Sabmin\SabminServiceProvider, and you can refresh the login page and look ! this is cool !

![Screenshot at 2021-05-08 14-09-11](https://user-images.githubusercontent.com/45889833/117530365-04fed000-b007-11eb-98ac-6a13ed091a11.png)



