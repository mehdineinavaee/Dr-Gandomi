<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\BlogLeftSidebarController;
use App\Http\Controllers\BlogRightSidebarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CampusExperienceController;
use App\Http\Controllers\CampusInformationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventDetailController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeOneController;
use App\Http\Controllers\HomeThreeController;
use App\Http\Controllers\HomeTwoController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\NotFoundPageController;
use App\Http\Controllers\OurProfessorController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\StudyOnlineController;
use App\Http\Controllers\TermConditionController;
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
Route::resource('about', AboutController::class);
Route::resource('admission', AdmissionController::class);
Route::resource('alumni', AlumniController::class);
Route::resource('application_form', ApplicationFormController::class);
Route::resource('blog_details', BlogDetailController::class);
Route::resource('blog_left_sidebar', BlogLeftSidebarController::class);
Route::resource('blog_right_sidebar', BlogRightSidebarController::class);
Route::resource('categories', CategoryController::class);
Route::resource('campus_experience', CampusExperienceController::class);
Route::resource('campus_information', CampusInformationController::class);
Route::resource('cart', CartController::class);
Route::resource('checkout', CheckoutController::class);
Route::resource('coming_soon', ComingSoonController::class);
Route::resource('contact', ContactController::class);
Route::resource('courses', CourseController::class);
Route::resource('event_details', EventDetailController::class);
Route::resource('events', EventController::class);
Route::resource('FAQ', FaqController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('home_one', HomeOneController::class);
Route::resource('home_three', HomeThreeController::class);
Route::resource('home_two', HomeTwoController::class);
Route::resource('my_account', MyAccountController::class);
Route::resource('not_found_page', NotFoundPageController::class);
Route::resource('our_professors', OurProfessorController::class);
Route::resource('privacy_policy', PrivacyPolicyController::class);
Route::resource('product_details', ProductDetailController::class);
Route::resource('products', ProductController::class);
Route::resource('study_online', StudyOnlineController::class);
Route::resource('terms_conditions', TermConditionController::class);
Route::resource('tuition_fee', TuitionFeeController::class);
Route::resource('wishlist', WishlistController::class);
