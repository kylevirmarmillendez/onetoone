<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;

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
    return view('welcome');
});

Route::get('/insert',function(){
    $user = User::findOrFail(2);

    $address = new Address(['name'=>'Ayungon Negros Oriental']);
    $user->address()->save($address);
});



Route::get('/update', function(){

    $address = Address::where('user_id', 1)->first();

    $address->name = "Updated ave 123434423, Alaskaa";

    $address->save();
});


Route::get('/read',function(){
    $user = User::findOrFail(2);

    echo $user->address->name;
});



Route::get('/delete',function(){
    $user = User::findOrFail(2);

    $user-> address -> delete();

    return 'done';

    
});


// Route::get('/findaddress',function(){

//     $user = User::find(1);

//     return $user->address;
// });