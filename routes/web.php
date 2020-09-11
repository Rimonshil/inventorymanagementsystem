<?php

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

Auth::routes();

Route::get('/home', 'HomeController@MainPage')->name('home');
//Employee
Route::resource('employee', 'EmployeeController');
Route::get('/delete-employee/{$id}', 'EmployeeController@destroy');

//Customer
Route::resource('customer', 'CustomerController');
Route::get('/delete-customer/{id}', 'CustomerController@destroy');

//Supplier
Route::resource('supplier', 'SupplierController');
Route::get('/delete-supplier/{$id}', 'SupplierController@destroy');

//Salary
Route::resource('salary', 'SalaryController');
Route::get('/add-advanced-salary','SalaryController@addAdvancedSalary')->name('advanced.salary');
Route::get('/all-advanced-salary','SalaryController@allAdvancedSalary')->name('all-advanced.salary');
Route::POST('/store-advanced-salary','SalaryController@storeAdvancedSalary')->name('store.advanced');
Route::get('/pay-salary','SalaryController@PaySalary')->name('pay.salary');
Route::POST('/last-month-salary','SalaryController@LastMonthSalary')->name('last.month.salary');

//Route::get('/delete-supplier/{$id}', 'SupplierController@destroy');

//Category
Route::resource('category', 'CategoryController');
Route::get('/delete-supplier/{$id}', 'SupplierController@destroy');

//Product
Route::resource('product', 'ProductController');
Route::get('/delete-product/{id}', 'ProductController@destroy');
//product import export
Route::get('products/import/', 'ProductController@ImporProductt')->name('import.product');
Route::get('products/export/', 'ProductController@export')->name('export.product');
Route::POST('import/', 'ProductController@import')->name('import');

//Expense
Route::resource('expense', 'ExpenseController');
Route::get('today-expense','ExpenseController@TodayExpense')->name('today.expense');
Route::get('monthly-expense','ExpenseController@MonthlyExpense')->name('monthly.expense');
Route::get('yearly-expense','ExpenseController@YearlyExpense')->name('yearly.expense');
Route::get('january-expense','ExpenseController@JanuaryExpense')->name('january.expense');
Route::get('february-expense','ExpenseController@FebruaryExpense')->name('february.expense');

Route::get('/delete-expense/{id}', 'ExpenseController@destroy');

//Attendence
Route::resource('attendence', 'AttendenceController');
Route::get('/take-attendence', 'AttendenceController@TakeAttendence')->name('take.attendence');
Route::get('/all-attendence', 'AttendenceController@index')->name('all.attendence');
Route::get('/delete-attendence/{id}', 'AttendenceController@destroy');


//Setting
Route::resource('setting', 'SettingController');
Route::get('/delete-company/{id}', 'SettingController@destroy');

//Setting
Route::resource('pos', 'POSController');
Route::get('pending/orders','POSController@PendingOrder')->name('pending-orders');
Route::get('success/orders','POSController@SuccessOrder')->name('success-orders');
Route::get('/view-order/{id}','POSController@ViewOrder');
Route::get('/pos-done/{id}','POSController@PosDone');

//cart
Route::post('add-cart','CartController@AddCart')->name('add-cart');
Route::post('/cart-update/{rowId}','CartController@update');
Route::get('/cart-remove/{rowId}','CartController@remove');
Route::post('create-invoice','CartController@CreateInvoice')->name('create-invoice');
Route::post('final-invoice','CartController@FinalInvoice')->name('final-invoice');



