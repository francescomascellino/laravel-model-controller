<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Controllers

- Add a page controller `php artisan make:controller Guests/PageController` (Guests è il namespace dove inserire il controller)
- Update the route in web.php:

ADD

```php

use App\Http\Controllers\Guest\PageController;


```

THIS STRING GETS THE ROUTE FRON THE Controller PageController CLASS AND USES THE 'index' METHOD. GIVES THE ROUTE THE "home" NAME:

```php

Route::get('/', [PageController::class, 'index'])->name('home');

```


- DEFINE FUNCTION TO ROUTE USING Controller METHOD FOR INDEX PAGE

THIS METHOD RETURNS THE 'index' VIEW

```php

    public function index()
    {
        // RETURNS THE VIEW 'index' (index.blade.php)
        return view('index');
    }

```

## Model/DB data

- Add db credentials to `.env`
- Create a model `php artisan make:model Movie`
- Add db `mysql -u[USERNAME] -p` create the db `CREATE DATABASE laravel_model_controller`
- Open phpmyadmin create a new `movies` table
- Add some records to the table using phpMyAdmin
- Open tinker `php artisan ti`
- Read the data inside tinker (CLI) `App\Models\Movie::all()` (returns all data from the table)
- Update the controller and the  route method to show all data taken form the db table

ADD (ON App\Http\Controllers\Guest\PageController.php)

```php

use App\Models\Movie;

```

EDIT THE 'index' METHOD AND GIVE THE MODEL Movie AS A COLLECTION ARRAY

```php

public function index()
{
    return view('index', ['movies' => Movie::all()]);
}

```
