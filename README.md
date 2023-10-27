<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Controllers

- add a page controller `php artisan make:controller Guests/PageController` (Guests é il namespace dove inserire il controller)
- update the route in web.php

ADD

```php
use App\Http\Controllers\Guest\PageController;

```

GETS THE ROUTE FRON THE Controller PageController CLASS AND USES THE 'index' METHOD. GIVES THE ROUTE THE "home" NAME

```php

Route::get('/', [PageController::class, 'index'])->name('home');

```

- DEFINE FUNCTION TO ROUTE USING Controller METHOD FOR INDEX PAGE

```php

    public function index()
    {
        // RETURNS THE VIEW 'index' (index.blade.php)
        return view('index');
    }

```

## Model/DB data

- add db credentials to `.env`
- create a model `php artisan make:model Movie`
- add db `mysql -u[USERNAME] -p` create the db `CREATE DATABASE laravel_model_controller`
- open phpmyadmin create a new `movies` table
- add some records to the table using php my admin
- open tinker `php artisan ti`
- read the data inside tinker (CLI) `App\Models\Movie::all()` returns all data from the table
- update the controller and the  route method to show all data taken form the db table

ADD
```php

use App\Models\Movie;

```

```php

public function index()
{
    return view('index', ['movies' => Movie::all()]);
}

```
