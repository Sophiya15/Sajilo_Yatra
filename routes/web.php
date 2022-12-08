<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\ReportingController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SlideShowController;
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
Route::get('/',[Frontendcontroller::class,'home'])->name('welcome');

Route::get('/about',[Frontendcontroller::class,'about'])->name('about');

Route::get('/services',[Frontendcontroller::class,'services'])->name('services');

Route::get('/cars',[Frontendcontroller::class,'cars'])->name('cars');

Route::get('/contact',[Frontendcontroller::class,'contact'])->name('contact');

Route::get('/faq',[Frontendcontroller::class,'faq'])->name('faq');

Route::get('/productview/{id}',[Frontendcontroller::class,'productview'])->name('productview');

Route::post('/booking/store',[BookingController::class,'store'])->name('bookings.store')->middleware('auth');


Route::get('/search',[Frontendcontroller::class,'search'])->name('search');

Route::get('/dashboard',[FrontendController::class,'dashboard'])->name('dashboard')->middleware('isAdmin');



Route::post('/feedback/store',[FeedbackController::class,'store'])->name('feedbacks.store')->middleware('auth');

Route::post('/users/booking',[FrontendController::class, 'userBooking'])->name('userBooking');
Route::post('/review/store',[ReviewController::class, 'review'])->name('reviews.store')->middleware('auth');


Route::get('/myprofile',[FrontendController::class,'profile'])->name('profile');
Route::get('/change-password', [App\Http\Controllers\FrontendController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\FrontendController::class, 'updatePassword'])->name('update-password');

Route::get('/profile/edit/{id}',[FrontendController::class, 'profileedit'])->name('profile.edit');
Route::post('/profile/update',[FrontendController::class, 'profileupdate'])->name('profileupdate');

Route::get('/myhistory',[HistoryController::class,'myhistory'])->name('myhistory');


// Route::get('/myhistory',[HistoryController::class,'myhistory'])->name('myhistory');

// Route::get('/profile',[FrontendController::class,'viewprofile'])->name('profile');
// Route::get('/profile/edit/{id}',[FrontendController::class, 'profileedit'])->name('profile.edit');
// Route::post('/profile/update',[FrontendController::class, 'profileupdate'])->name('profileupdate');


//routeforadmin
Route::middleware(['auth','isAdmin'])->name('admin.')->prefix('admin')->group(function()
{
    Route::resource('slideshows',SlideShowController::class);
    Route::post('/slideshows/delete',[\App\Http\Controllers\SlideShowController::class,'delete'])->name('slideshows.delete');

    Route::resource('brands',BrandController::class);
    Route::post('/brands/delete',[\App\Http\Controllers\Admin\BrandController::class,'delete'])->name('brands.delete');

    Route::resource('vehicles',VehicleController::class);
    Route::post('/vehicle/delete',[\App\Http\Controllers\Admin\VehicleController::class,'delete'])->name('vehicles.delete');

    Route::resource('bookings',BookingController::class);
    Route::get('/bookings',[\App\Http\Controllers\BookingController::class,'index'])->name('bookings.index');
    
Route::get('/cancel/{id}',[FrontendController::class,'cancel'])->name('bookings.cancel');
Route::get('/confirm/{id}',[FrontendController::class,'confirm'])->name('bookings.confirm');
Route::get('/compete/{id}',[FrontendController::class,'complete'])->name('bookings.complete');

Route::get('/canceled',[FrontendController::class,'canceled'])->name('canceled');
Route::get('/confirmed',[FrontendController::class,'confirmed'])->name('confirmed');
Route::get('/completed',[FrontendController::class,'completed'])->name('completed');
    
    Route::resource('feedbacks', FeedbackController::class);
    Route::get('/feedbacks',[\App\Http\Controllers\FeedbackController::class,'index'])->name('feedbacks.index');
    Route::post('/feedback/delete',[\App\Http\Controllers\FeedbackController::class,'delete'])->name('feedbacks.delete');
    
    Route::resource('users', UserController::class);

    
    Route::resource('drivers',DriverController::class);
    Route::post('/drivers/delete',[\App\Http\Controllers\Admin\DriverController::class,'delete'])->name('drivers.delete');
      
    Route::resource('reportings',ReportingController::class);
    Route::post('/reportings/delete',[\App\Http\Controllers\Admin\ReportingController::class,'delete'])->name('reportings.delete');

    Route::resource('reviews',ReviewController::class);
    Route::post('/reviews/delete',[\App\Http\Controllers\Admin\ReviewController::class,'delete'])->name('reviews.delete');
    Route::get('/reviews',[\App\Http\Controllers\Admin\ReviewController::class,'index'])->name('reviews.index');
        
}
);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','isAdmin'])->name('dashboard');

require __DIR__.'/auth.php';
