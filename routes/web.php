<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProjectMemberController;
use App\Http\Controllers\QuotationRequestController;
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

// Route::get('/', [HomeController::class,'index'])->name('home');

Route::controller( HomeController::class )->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/story', 'story')->name('story');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/career', 'career')->name('career');
    Route::get('/allservices', 'services')->name('services');
    Route::get('/works/{industry}', 'industries')->name('industries.show');
    Route::get('/project_details/{project}', 'pdtails')->name('projects.details');
    Route::get('/members_protfolio/{member}', 'memberProtfolio')->name('memberProtfolio');
});

Route::get('/quotation-request', [QuotationRequestController::class, 'showForm'])->name('quotation.form');
Route::post('/quotation-request', [QuotationRequestController::class, 'submitForm'])->name('quotation.submit');





Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');



    Route::resource('queries', QueryController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('members', MemberController::class);
    Route::resource('projectmembers', ProjectMemberController::class);

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('carers', CareerController::class);

    Route::group(['prefix' => 'projectmembers'], function () {
        Route::get('/', [ProjectMemberController::class,  'index'])->name('projectmembers.index');
        Route::get('/create/{project}', [ProjectMemberController::class,  'create'])->name('projectmembers.create');
        Route::get('/search/{query}', [ProjectMemberController::class,  'search'])->name('projectmembers.search');
        Route::post('/store', [ProjectMemberController::class,  'store'])->name('projectmembers.store');
        Route::delete('/delete/{project}', [ProjectMemberController::class,  'destroy'])->name('projectmembers.destroy');
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
