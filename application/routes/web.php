<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index3'])
    ->name('index');

Route::get('/index3', [HomeController::class, 'index3'])
    ->name('index3');

Route::get('/about-v-3', [PagesController::class, 'about_v_3'])
    ->name('about-v-3');

Route::get('/our-doctors', [PagesController::class, 'our_doctors'])
    ->name('our-doctors');

Route::get('/our-doctors-details', [PagesController::class, 'our_doctors_details'])
    ->name('our-doctors-details');

Route::get('/department', [PagesController::class, 'department'])
    ->name('department');

Route::get('/appointment', [PagesController::class, 'appointment'])
    ->name('appointment');

Route::get('/services-3', [PagesController::class, 'services_3'])
    ->name('services-3');

Route::get('/medicine-and-health', [PagesController::class, 'medicine_and_health'])
    ->name('medicine-and-health');

Route::get('/heart-specialist', [PagesController::class, 'heart_specialist'])
    ->name('heart-specialist');

Route::get('/ear-nose-and-throat', [PagesController::class, 'ear_nose_and_throat'])
    ->name('ear-nose-and-throat');

Route::get('/general-surgery', [PagesController::class, 'general_surgery'])
    ->name('general-surgery');

Route::get('/pregnancy-and-child-birth', [PagesController::class, 'pregnancy_and_child_birth'])
    ->name('pregnancy-and-child-birth');

Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::get('/project', [PagesController::class, 'project'])->name('project');
Route::get('/project-details', [PagesController::class, 'project_details'])->name('project-details');
Route::get('/timetable', [PagesController::class, 'timetable'])->name('timetable');
Route::get('/404', [PagesController::class, 'not_found'])->name('404');

Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/product-details', [PagesController::class, 'product_details'])->name('product-details');
Route::get('/cart', [PagesController::class, 'cart'])->name('cart');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::get('/wishlist', [PagesController::class, 'wishlist'])->name('wishlist');
Route::get('/sign-up', [PagesController::class, 'sign_up'])->name('sign-up');
Route::get('/login', [PagesController::class, 'login'])->name('login');

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blog-standard', [PagesController::class, 'blog_standard'])->name('blog-standard');
Route::get('/blog-details', [PagesController::class, 'blog_details'])->name('blog-details');

Route::post('/contact/send', [ContactController::class, 'sendContact'])
->middleware('throttle:5,1')->name('contact.send');
Route::post('/newsletter/subscribe', [ContactController::class, 'sendNewsletter'])
->middleware('throttle:5,1')->name('newsletter.subscribe');

Route::fallback(function () {
    return view('pages.404');
});