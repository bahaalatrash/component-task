<?php

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/{id}',function($id){
    $order=Order::find($id);
return view('pages.dashboard',compact('order'));
});
Route::get('/users',function(){
$users=User::all();
return view('pages.users',compact('users'));
});
