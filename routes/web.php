<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\ApplicationFormsController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\BlogLeftSidebarsController;
use App\Http\Controllers\BlogRightSidebarsController;
use App\Http\Controllers\CampusExperiencesController;
use App\Http\Controllers\CampusInformationsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CheckoutsController;
use App\Http\Controllers\ComingSoonsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CoursesDetailsController;
use App\Http\Controllers\EventDetailsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\HomeOnesController;
use App\Http\Controllers\HomeThreesController;
use App\Http\Controllers\HomeTwosController;
use App\Http\Controllers\MyAccountsController;
use App\Http\Controllers\NotFoundPagesController;
use App\Http\Controllers\OurProfessorsController;
use App\Http\Controllers\PrivacyPoliciesController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StudyOnlinesController;
use App\Http\Controllers\TermsConditionsController;
use App\Http\Controllers\TuitionFeesController;
use App\Http\Controllers\WishlistsController;
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
    return view('home_one.index');
});
Route::resource('about', AboutsController::class);
Route::resource('admissions', AdmissionsController::class);
Route::resource('alumni', AlumnisController::class);
Route::resource('application_form', ApplicationFormsController::class);
Route::resource('blog_details', BlogDetailsController::class);
Route::resource('blog_left', BlogLeftSidebarsController::class);
Route::resource('blog_right', BlogRightSidebarsController::class);
Route::resource('campus_experience', CampusExperiencesController::class);
Route::resource('campus_information', CampusInformationsController::class);
Route::resource('cart', CartsController::class);
Route::resource('checkout', CheckoutsController::class);
Route::resource('coming_soon', ComingSoonsController::class);
Route::resource('contact', ContactsController::class);
Route::resource('courses', CoursesController::class);
Route::resource('courses_details', CoursesDetailsController::class);
Route::resource('event_details', EventDetailsController::class);
Route::resource('events', EventsController::class);
Route::resource('FAQ', FaqsController::class);
Route::resource('gallery', GalleriesController::class);
Route::resource('home_one', HomeOnesController::class);
Route::resource('home_three', HomeThreesController::class);
Route::resource('home_two', HomeTwosController::class);
Route::resource('my_account', MyAccountsController::class);
Route::resource('page404', NotFoundPagesController::class);
Route::resource('our_professors', OurProfessorsController::class);
Route::resource('privacy_policy', PrivacyPoliciesController::class);
Route::resource('product_details', ProductDetailsController::class);
Route::resource('products', ProductsController::class);
Route::resource('study_online', StudyOnlinesController::class);
Route::resource('terms_conditions', TermsConditionsController::class);
Route::resource('tuition_fees', TuitionFeesController::class);
Route::resource('wishlist', WishlistsController::class);
