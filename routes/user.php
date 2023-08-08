<?php


use\Illuminate\Support\Facades\Route;

Route::prefix('customer')->group(function(){
    Route::get('profile',function (){
        return 'User Page';
    
    });
    Route::get('courses',function (){
        return 'User courses';
    
    });
    Route::get('comments',function (){
        return 'User comments';
    
    });

});

    
//