<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\BlogRightSidebarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventDetailController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeOneController;
use App\Http\Controllers\ModeController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\NotFoundPageController;
use App\Http\Controllers\OurProfessorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\StudyOnlineController;
use App\Http\Controllers\TranslatorController;
use App\Http\Controllers\TuitionFeeController;
use App\Http\Controllers\WishlistController;
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
    return view('home_ones.index');
});
Route::resource('authors', AuthorController::class);
Route::resource('blog_details', BlogDetailController::class);
Route::resource('blog_right_sidebar', BlogRightSidebarController::class);
Route::resource('cart', CartController::class);
Route::resource('checkout', CheckoutController::class);
Route::resource('contact', ContactController::class);
Route::resource('courses', CourseController::class);
Route::resource('event_details', EventDetailController::class);
Route::resource('events', EventController::class);
Route::resource('faqs', FaqController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('home_one', HomeOneController::class);
Route::resource('my_account', MyAccountController::class);
Route::resource('not_found_page', NotFoundPageController::class);
Route::resource('our_professors', OurProfessorController::class);
Route::resource('products', ProductController::class);
Route::resource('publishers', PublisherController::class);
Route::resource('study_online', StudyOnlineController::class);
Route::resource('translators', TranslatorController::class);
Route::resource('tuition_fee', TuitionFeeController::class);
Route::resource('wishlist', WishlistController::class);

// Admin Routes
Route::get('admin/courses', [CourseController::class, 'admin'])->name('courses.admin');
Route::resource('categories', CategoryController::class);
Route::resource('modes', ModeController::class);
Route::get('admin/our_professors', [OurProfessorController::class, 'admin'])->name('our_professors.admin');
Route::get('admin/faqs', [FaqController::class, 'admin'])->name('faqs.admin');
Route::get('admin/galleries', [GalleryController::class, 'admin'])->name('galleries.admin');
Route::post('gallery/deleteSelectedItems', [GalleryController::class, 'deleteSelectedItems'])->name('gallery.deleteSelectedItems');
Route::get('admin/products', [ProductController::class, 'admin'])->name('products.admin');
