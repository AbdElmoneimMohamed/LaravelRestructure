<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel Restructure

In this project I Resturctured the laravel project to TWO Modules

* backend
* frontend

these modules you will find it in modules directory 

* in each module you will find the the routes file for each model in this module


## Localization

i configured this project to support two languages

* English
* Arabic

 you are free to add/remove any language
 
 to use it only add new messages file for your lang directory in app/resources/lang
 and use {{__("messages.keyword")}} in your blade file
 
 ## Views
 
 you will find them in app/resources/modules-views directory
 i divided them to to directory 
 
 * backend
 * frontend
 
 ## Roles
 
 i added two roles in this project admin and user
 
 * if you are admin you will go to admin dashboard
 * if you are user you will go to frontend dashboard
 
 ## models
 
 you will find all models in app/Entities Directory
 and
 
 ## To Use this project
 
 * create homestead database  
 * git clone https://github.com/AbdElmoneimMohamed/LaravelRestructure.git
 * php artisan migrate:refresh --seed
 *  you can login with role admin with 
 
 username : admin@admin.com
 password : adminadmin
 
 *  you can login with user admin with 
  
  username : user@user.com
  password : useruser