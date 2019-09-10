<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('patientlogin', 'PatientController@index');
Route::get('patientregister', 'PatientController@patientRegister');
Route::get ('/patientdashboard', 'PatientController@showdashboard');

//Admin Authentication Routes


Route::get('/adminofhospital',function(){
   return view('admin.adminregister'); 
});

//Route::get('admin/home','AdminController@index')->name('admin.admin');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.adminlogin');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/adminregister','Admin\RegisterController@store');
Route::get('admin/admindashboard','Admin\AdminController@index');


//Dcotor Authentication Routes


Route::get('/doctorofhospital',function(){
   return view('doctor.doctorregister'); 
});

//Route::get('doctor/home','DoctorController@index')->name('admin.admin');
Route::get('doctor','Doctor\LoginController@showLoginForm')->name('doctor.doctorlogin');
Route::post('doctor','Doctor\LoginController@login');
Route::post('doctor-password/email','Doctor\ForgotPasswordController@sendResetLinkEmail')->name('doctor.password.email');
Route::get('doctor-password/reset','Doctor\ForgotPasswordController@showLinkRequestForm')->name('doctor.password.request');
Route::post('doctor-password/reset','Doctor\ResetPasswordController@reset');
Route::get('doctor-password/reset/{token}','Doctor\ResetPasswordController@showResetForm')->name('doctor.password.reset');
Route::post('/doctorregister','Doctor\RegisterController@store');
Route::get('doctor/doctordashboard','Doctor\DoctorController@index');



//patient Routes

Route::get('patientlogin', 'PatientController@index');
Route::get('patientregister', 'PatientController@patientRegister');