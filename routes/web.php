<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{id?}/comment/{commentid?}', function( string $value, string $commentid){
if($value){
    return "<h2>Your value is : " . $value ." <br/>"."  and your comment is : ". $commentid. " </h2>";
}else{

    return "<h2>No value  Found </h2>";
}
})->where('id','[0-9]+')->whereAlpha('commentid', '[a-zA-Z]+');


Route::get('/post', function(){
  return view('post');
})->name('mypost');


Route::get('/about', function(){
$name="Limon Islam";
  return view('about',['halom'=>$name]);
})->name('about-me');

// Route::redirect('/about', 'post', 301);

Route::fallback(function(){
return "<h1> Sorry, page not found</h1>";
});

Route::get('/test',function(){
    $name="Limon Islam";
    return view('about',['halom'=>$name]);
});
