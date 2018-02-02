# laravel-topnav
Create simple top navigation for laravel

## Basic Usage

### Installation

```bash
composer require pinfort/laravel-topnav
```
Attention: Perhaps it is necessary to change the minimum stability of the composer...

### Publish files

```bash
php artisan vendor:publish
```
You will find five new files.
* public/vendor/TopNav/top_nav.css
    - It is required.
- config/top_nav.php
    - You will edit this file to make your own top navigation.
- resources/lang/vendor/LaravelTopNav/en/ui.php
    - You will edit this file too.
    - To add new items, you should define its translation.
- resources/views/vendor/LaravelTopNav/menu.blade.php
    - This file is main view of menu.
    - In basic, you have no need to edit this file.
- resources/views/vendor/LaravelTopNav/menu_items.blade.php
    - This file is sub view of menu.
    - In basic, you have no need to edit this file.

### Edit config

Edit config/top_nav.php whatever you need.
Read comments in the file.

### Add translation

Add translations to resources/lang/vendor/LaravelTopNav/en/ui.php.
cf. config/top_nav.php

### Enable library

Add style sheet link to your view. near the line 14

in resources/views/layouts/app.blade.php(created by make:auth command)

```diff
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
+<link href="{{ asset('vendor/TopNav/top_nav.css') }}" rel="stylesheet">
```

Add following code in your view.

same file. in resources/views/layouts/app.blade.php(created by make:auth command)

near the line 39
```diff
 <!-- Left Side Of Navbar -->
-<ul class="nav navbar-nav">
-    &nbsp;
-</ul>
+@include('LaravelTopNav::menu')
```

### Now it works!
![demo](https://raw.github.com/wiki/pinfort/Laravel-topnav/media/Laravel-2018_02_03-3_41_06Trim.gif)
