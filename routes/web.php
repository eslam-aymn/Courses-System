<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\CourseController;
use App\Models\Course;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::namespace('Front')->group(function(){

    Route::get('/' , 'HomepageController@index')->name("front.homepage");
    Route::get('/category/{id}' , 'CourseController@category')->name("front.category");
    Route::get('/category/{id}/course/{courseid}' , 'CourseController@course')->name("front.course");
    Route::get('/contact' , 'ContactController@index')->name("front.contact");
    Route::post('/message/newsletter' , 'MessageController@newsletter')->name("front.message.newsletter");
    Route::post('/message/contact' , 'MessageController@contact')->name("front.message.contact");
    Route::post('/message/enroll' , 'MessageController@enroll')->name("front.message.enroll");

});

Route::namespace('Admin')->group(function(){
    Route::get('/dashboard' , 'HomeController@index')->name("admin.home");
    Route::get('/dashboard/login' , 'AuthController@login')->name("admin.login");
    Route::post('/dashboard/do-login' , 'AuthController@doLogin')->name("admin.doLogin");
    Route::get('/dashboard/logout' , 'AuthController@logout')->name("admin.logout");
});
