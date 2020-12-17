<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// registration
Route::get('/',"FrontendController@index")->name('frontend.index');
Route::get('/project',"FrontendController@project")->name('frontend.project');
Route::get('/about',"FrontendController@about")->name('frontend.about');
Route::get('/contact',"FrontendController@contact")->name('frontend.contact');
Route::get('/gallery',"FrontendController@gallery")->name('frontend.gallery');
// Route::get('/project',"FrontendController@project")->name('project');
Route::post('registration',"RegistrationController@store");
//Route::post('contact_form',"ContactController@message")->name('contact.save');
Route::post('/infoSave',"FrontendController@infoSave")->name('frontend.infoSave');


// admin


Auth::routes();
// Route::get('/admin',"AdminController@admin")->name('admin.index');
// Route::get('/user',"AdminController@user")->name('admin.user');

// Route::get('/logout',"LoginController@logout")->name('logout');
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    // Route::prefix('admin')->name('admin')->group(function () {
        Route::get('/admin',"AdminController@admin")->name('admin.index');
        Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    // });
});
