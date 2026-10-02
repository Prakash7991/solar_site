<?php

use Illuminate\Support\Facades\Route;

// User
use App\Http\Controllers\Frontend\IndexController as FrontIndex;

// Admin
use App\Http\Controllers\Admin\IndexController as AdminIndex;
use App\Http\Controllers\Admin\AdminController as AdminAdmin;
use App\Http\Controllers\Admin\UserController as AdminUser;
use App\Http\Controllers\Admin\DoctorController as AdminDoctor;
use App\Http\Controllers\Admin\DepartmentController as AdminDept;
use App\Http\Controllers\Admin\ServiceController as AdminService;
use App\Http\Controllers\Admin\AppointmentController as AdminAppo;
use App\Http\Controllers\Admin\SupplierController as AdminSupplier;
// Cars
use App\Http\Controllers\Api\CarController;


//Supplier
use App\Http\Controllers\Supplier\LoginController as SupplierLogin;
use App\Http\Controllers\Supplier\IndexController as SupplierIndex;







// Supplier
Route::group(['prefix' => 'supplier'], function () {
    Route::get('login',[SupplierLogin::class,'Index'])->name('supplier_login');
    Route::post('login',[SupplierLogin::class,'Check'])->name('supplier_loginu');
    Route::get('/home', [SupplierIndex::class, 'Index'])->name('supplier_home');
    Route::get('supplier_edit',[SupplierIndex::class,'Edit_Profile'])->name('supplier_edit');
    Route::post('supplier_update',[SupplierIndex::class,'Update_Profile'])->name('supplier_update');
    
    Route::get('logout',[SupplierLogin::class,'Logout'])->name('supplier_logout');


//Booking
   Route::get('fetchuser',[SupplierIndex::class,'FetchUser'])->name('supplier_users');
    Route::get('user/{id}',[SupplierIndex::class,'Edit'])->name('booking_users_edit');
    Route::post('user_update',[SupplierIndex::class,'Update'])->name('supplier_user_update');
    
        
});


// Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('login',[AdminIndex::class,'Login'])->name('admin_login');
    Route::post('login',[AdminAdmin::class,'Check'])->name('admin_loginu');
    Route::get('admin_edit',[AdminAdmin::class,'Edit_Profile'])->name('admin_edit');
    Route::post('admin_update',[AdminAdmin::class,'Update_Profile'])->name('admin_update');
    Route::get('logout',[AdminAdmin::class,'Logout'])->name('admin_logout');
    Route::get('/home', [AdminIndex::class, 'Index'])->name('admin_home');

    // users  
    Route::get('users',[AdminUser::class,'Users'])->name('admin_users');
    Route::post('users',[AdminUser::class,'Store'])->name('admin_users_insert');
    Route::get('user_edit/{id}',[AdminUser::class,'Edit'])->name('admin_users_edit');
    Route::post('user_update',[AdminUser::class,'Update'])->name('admin_user_update');
    Route::get('user_delete/{id}',[AdminUser::class,'Delete'])->name('admin_users_delete');
    Route::get('user_acept/{id}',[AdminUser::class,'Acept'])->name('admin_users_acept');
    Route::get('user_reject/{id}',[AdminUser::class,'Reject'])->name('admin_users_reject');
    //
    //
    //admin_supplier_insert
    Route::get('supplier',[AdminSupplier::class,'Users'])->name('admin_supplier');
    Route::post('spplier',[AdminSupplier::class,'Store'])->name('admin_supplier_insert');
    Route::get('supplier_edit/{id}',[AdminSupplier::class,'Edit'])->name('admin_supplier_edit');
    Route::post('supplier_update',[AdminSupplier::class,'Update'])->name('admin_supplier_update');
    Route::get('supplier_delete/{id}',[AdminSupplier::class,'Delete'])->name('admin_supplier_delete');  
});

//User Frontend
Route::group(['prefix' => '/'], function () {
    Route::get('/',[FrontIndex::class,'Index'])->name('front_home');
    Route::get('/home',[FrontIndex::class,'Indextwo'])->name('front_home_two');
    Route::get('/about',[FrontIndex::class,'About'])->name('front_about');
    Route::get('/service',[FrontIndex::class,'Service'])->name('front_service');
    Route::get('/service_details',[FrontIndex::class,'Service_Details'])->name('front_service_details');
    Route::get('/project',[FrontIndex::class,'ProjectGrid'])->name('front_project');
    Route::get('/project_details',[FrontIndex::class,'ProjectDetails'])->name('front_project_details');
    Route::get('/blog',[FrontIndex::class,'Blog'])->name('front_blog');
    Route::get('/blog_details',[FrontIndex::class,'BlogDetails'])->name('front_blog_details');
    Route::get('/team',[FrontIndex::class,'Team'])->name('front_team');
    Route::get('/team_details',[FrontIndex::class,'TeamDetails'])->name('front_team_details');
    Route::get('/faq',[FrontIndex::class,'Faq'])->name('front_faq');
    Route::get('/error',[FrontIndex::class,'Error'])->name('front_error');
    Route::get('/contact',[FrontIndex::class,'Contact'])->name('front_contact');
})





?>