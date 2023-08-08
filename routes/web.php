<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $link = route('about');
    return "<a href='$link'>About-us</a>";
});
Route::get('/about', function () {
    return ('About-us');
})->name('about');
Route::get('/contact', function () {
    return ('Contact-us');
});
Route::post('/contact', function () {
    return ('Contact-Us Data');
});
Route::get('/services', function () {
    return ('Our Services');
});
Route::get('/our-team', function () {
    return ('Our Team');
});
Route::get('/blog', function () {
    return ('Our Blog');
});
Route::get('/course/{name}/{hours?}', function ($name, $hours = 0 ) {
    if($hours ==0){
        return "Course Name Is :  $name  " ;
    }else{
        return "Course Name Is :  $name & Course Hours = $hours " ;
    }
    
});

