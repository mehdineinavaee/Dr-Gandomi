<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogRightSidebarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeOneController;
use App\Http\Controllers\ModeController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\OurProfessorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TranslatorController;
use Illuminate\Support\Facades\Route;

Route::resource('authors', AuthorController::class);
Route::resource('blog_right_sidebars', BlogRightSidebarController::class);
Route::resource('cart', CartController::class);
Route::resource('contact', ContactController::class);
Route::resource('courses', CourseController::class);
Route::resource('events', EventController::class);
Route::resource('faqs', FaqController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('home_one', HomeOneController::class);
Route::resource('my_account', MyAccountController::class);
Route::resource('our_professors', OurProfessorController::class);
Route::resource('products', ProductController::class);
Route::resource('publishers', PublisherController::class);
Route::resource('settings', SettingController::class);
Route::resource('translators', TranslatorController::class);

// Admin Routes
Route::get('/', [HomeOneController::class, 'index'])->name('/');
Route::get('admin/blog_right_sidebars', [BlogRightSidebarController::class, 'admin'])->name('blog_right_sidebars.admin');
Route::get('admin/courses', [CourseController::class, 'admin'])->name('courses.admin');
Route::resource('categories', CategoryController::class);
Route::get('admin/events', [EventController::class, 'admin'])->name('events.admin');
Route::resource('event_categories', EventCategoryController::class);
Route::resource('modes', ModeController::class);
Route::get('admin/our_professors', [OurProfessorController::class, 'admin'])->name('our_professors.admin');
Route::get('admin/faqs', [FaqController::class, 'admin'])->name('faqs.admin');
Route::get('admin/galleries', [GalleryController::class, 'admin'])->name('galleries.admin');
Route::post('gallery/deleteSelectedItems', [GalleryController::class, 'deleteSelectedItems'])->name('gallery.deleteSelectedItems');
Route::get('admin/products', [ProductController::class, 'admin'])->name('products.admin');
