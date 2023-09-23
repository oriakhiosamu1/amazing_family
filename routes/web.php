<?php

use App\Http\Controllers\AdminLogicController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditAdminPageController;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\SingleProductController;
use App\Http\Controllers\UsersLogicController;
use App\Http\Controllers\UsersPageController;
use App\Http\Middleware\AdminAndUserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
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


//Index page route
Route::get('/', function () {
    return view('users.home');
});


//Route that directs registered users as either admin or regular users
Route::get('createUser', [RegisteredController::class, 'registered']);


//Middleware group that filters authenticated users from the Admin pages and functions.
Route::middleware(AdminMiddleware::class)->group(function(){
    //route for admin/users page
    Route::get('admin/users', [AdminPagesController::class, 'users'])->name('admin_users');

    //route for admin/events page
    Route::get('admin/events', [AdminPagesController::class, 'events'])->name('admin_event');

    //route for admin/news
    Route::get('admin/news', [AdminPagesController::class, 'news'])->name('admin_news');

    //route for admin/sermons
    Route::get('admin/sermons', [AdminPagesController::class, 'sermons'])->name('admin_sermons');

    //route for set event form logic
    Route::post('set_event', [AdminLogicController::class, 'set_event'])->name('set_event');

    //route for create news form logic
    Route::post('create_news', [AdminLogicController::class, 'create_news'])->name('create_news');

    //route for create sermons form logic
    Route::post('create_sermons', [AdminLogicController::class, 'create_sermons'])->name('create_sermons');

    //These routes gives single products

    //route for news list page
    Route::get('news_list', [SingleProductController::class, 'news_list'])->name('news_list');

    //route for event list page
    Route::get('event_list', [SingleProductController::class, 'event_list'])->name('event_list');

    //route for sermon list page
    Route::get('sermon_list', [SingleProductController::class, 'sermon_list'])->name('sermon_list');

    //route for individual sermon page
    Route::get('sermon/list', [SingleProductController::class, 'show_sermons'])->name('sermon/list');

    //route to remove sermon
    Route::get('remove_sermons/{listing}', [SingleProductController::class, 'remove_sermons']);

    //route to remove event
    Route::get('remove_event/{listing}', [SingleProductController::class, 'remove_event']);

    //route to remove news
    Route::get('remove_news/{listing}', [SingleProductController::class, 'remove_news']);

    //Edit Page Functions

    //event page edit form
    Route::get('event_form/{event}/edit', [EditAdminPageController::class, 'event_form']);
    //event edit function
    Route::put('event/{event}', [EditAdminPageController::class, 'edit_event'])->name('event.update');
    //news page edit form
    Route::get('news_form/{news}/edit', [EditAdminPageController::class, 'news_form']);
    //news edit function
    Route::put('news/{news}', [EditAdminPageController::class, 'edit_news'])->name('news.update');


    //sermons page edit form
    Route::get('sermons_form/{sermons}/edit', [EditAdminPageController::class, 'sermons_form']);
    //sermons edit function
    Route::put('sermons/{sermons}', [EditAdminPageController::class, 'edit_sermons'])->name('sermons.update');

});


//Middleware group for unauthenticated Users i.e guest
Route::middleware('guest')->group(function(){
    //route for signin form
    Route::get('signin', [AuthController::class, 'signin'])->name('signin');

    //Log in function
    Route::post('user/signin', [AuthController::class, 'auth_signin'])->name('user/signin');
});



//Middleware group for authenticated Users that are not admin
Route::middleware(UserMiddleware::class)->group(function(){
    //route for sermons page
    Route::get('sermons', [UsersPageController::class, 'sermons'])->name('sermons');

    //route for events page
    Route::get('events', [UsersPageController::class, 'events'])->name('events');

    //route for news page
    Route::get('news', [UsersPageController::class, 'news'])->name('news');
});


Route::middleware(['guest', UserMiddleware::class])->group(function(){
    //Route for contact page
    Route::get('contact', [UsersPageController::class, 'contact'])->name('contact');

    //route for contact form submit logic
    Route::post('contact-form-submit', [UsersLogicController::class, 'contact_form_submit'])->name('contact-form-submit');

    //route for the donations page
    Route::get('give', [UsersPageController::class, 'give'])->name('give');
});

Route::middleware(AdminAndUserMiddleware::class)->group(function(){
    //Log out function
    Route::get('user/signout', [AuthController::class, 'auth_signout'])->name('user/signout');

    //route for individual news page
    Route::get('news/{listings}', [SingleProductController::class, 'show_news']);

    //route for individual sermons page
    Route::get('sermons/{listings}', [SingleProductController::class, 'show_sermons']);

    //Log out function
    Route::get('user/signout', [AuthController::class, 'auth_signout'])->name('user/signout');

});
























Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
