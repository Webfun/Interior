<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\WebsiteSettingController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\FormController;

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


// Frontend Routes

Route::name('frontend.')->group(function () {

    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/contact/store', [PageController::class, 'contact_store'])->name('contact.store');
    Route::get('/store', [PageController::class, 'store'])->name('store');
});


Route::redirect("/admin", "/login");

Route::group(['prefix' => 'admin'], function () {
    Route::name('admin.')->group(function () {

        Route::group(['middleware' => 'admin.auth'], function () {
            // Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




             // contact form
             Route::get('/message', [FormController::class, 'message_index'])->name('message.index');
             Route::get('/message/destroy/{id}', [FormController::class, 'message_destroy'])->name('message.destroy');
             Route::post('/message/export', [FormController::class, 'message_export'])->name('message.export');

             // Testimonials
             Route::name('testimonial.')->group(function () {
                Route::get('/testimonials', [TestimonialController::class, 'index'])->name('index');
                Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('create');
                Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('store');
                Route::get('/testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
                Route::post('/testimonials/update/{id}', [TestimonialController::class, 'update'])->name('update');
                Route::get('/testimonials/destroy/{id}', [TestimonialController::class, 'destroy'])->name('destroy');










                Route::get('/website-settings', [WebsiteSettingController::class, 'index'])->name('website-settings.index');
                Route::get('/website-settings/edit/{slug}', [WebsiteSettingController::class, 'edit'])->name('website-settings.edit');
                Route::post('/website-settings/update/{slug}', [WebsiteSettingController::class, 'update'])->name('website-settings.update');

            });

             // projects
             Route::name('project.')->group(function () {
                Route::get('/projects', [ProjectController::class, 'index'])->name('index');
                Route::get('/projects/show/{id}', [ProjectController::class, 'show'])->name('show');
                Route::get('/projects/create', [ProjectController::class, 'create'])->name('create');
                Route::post('/projects/store', [ProjectController::class, 'store'])->name('store');
                Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
                Route::post('/projects/update/{id}', [ProjectController::class, 'update'])->name('update');
                Route::get('/projects/destroy/{id}', [ProjectController::class, 'destroy'])->name('destroy');

                Route::get('/projects/{project_id}/image/create', [ProjectController::class, 'create_image'])->name('image.create');
                Route::post('/projects/{project_id}/image/store', [ProjectController::class, 'store_image'])->name('image.store');
                Route::get('/projects/{project_id}/image/destroy/{image_id}', [ProjectController::class, 'destroy_image'])->name('image.destroy');
            });
            Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');


            Route::get('/website-settings', [WebsiteSettingController::class, 'index'])->name('website-settings.index');
            Route::get('/website-settings/edit/{slug}', [WebsiteSettingController::class, 'edit'])->name('website-settings.edit');
            Route::post('/website-settings/update/{slug}', [WebsiteSettingController::class, 'update'])->name('website-settings.update');

        });
    });


    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('/profile/image/update', [ProfileController::class, 'image_update'])->name('profile.image.update');
    Route::get('/profile/image/destroy', [ProfileController::class, 'image_destroy'])->name('profile.image.destroy');
});

require __DIR__ . '/auth.php';
