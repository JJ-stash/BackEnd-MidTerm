<?php

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/companies/all', '\App\Http\Controllers\companyCntroller@viewAll')->name('companies.all');
Route::post('/companies/add', '\App\Http\Controllers\companyCntroller@addNew')->name('companies.add');
Route::post('/companies/delete', '\App\Http\Controllers\companyCntroller@delete')->name('companies.delete');

Route::get('/employees/all', '\App\Http\Controllers\employeeCntroller@viewAll')->name('employees.all');
Route::post('/employees/add', '\App\Http\Controllers\employeeCntroller@addNew')->name('employees.add');
Route::post('/employees/delete', '\App\Http\Controllers\employeeCntroller@delete')->name('employees.delete');