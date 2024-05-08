<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReasonController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\SubsciberController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TemoignageController;
use App\Models\Product;
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

Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/activites/category/{slug:slug}', [ProductController::class, 'showByCategory'])->name('activites.category');
Route::get('/activites', [ProductController::class, 'showAllVisitors'])->name('activites.all');
Route::get('/activites/{slug:slug}', [ProductController::class, 'showDetail'])->name('activites.detail');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/abouts', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'service'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/subscriber/store', [SubsciberController::class, 'store'])->name('subsciber.store');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/slides-all', [SlideController::class, 'index'])->name('slides.index');
    Route::post('/slides/store', [SlideController::class, 'store'])->name('slides.store');
    Route::get('/slides/create', [SlideController::class, 'create'])->name('slides.create');
    Route::get('/slides/{slide}/edit', [SlideController::class, 'edit'])->name('slides.edit');
    Route::put('/slides/{slide}/update', [SlideController::class, 'update'])->name('slides.update');
    Route::post('/slides/{slide}/destroy', [SlideController::class, 'destroy'])->name('slides.destroy');

    Route::post('/about/{about}/update', [AboutController::class, 'update'])->name('about.update');
    Route::get('/about/edit', [AboutController::class, 'create'])->name('about.create');

    Route::post('/success/{success}/update', [SuccessController::class, 'update'])->name('success.update');
    Route::get('/success/edit', [SuccessController::class, 'create'])->name('success.create');

    Route::post('/reason/{reason}/update', [ReasonController::class, 'update'])->name('reason.update');
    Route::get('/reason/edit', [ReasonController::class, 'create'])->name('reason.create');

    Route::get('/services-all', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('/services/{service}/update', [ServiceController::class, 'update'])->name('services.update');
    Route::get('/services/{service}/destroy', [ServiceController::class, 'destroy'])->name('services.destroy');

    Route::get('/categories-all', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/category/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/category/{category}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');

    
    Route::get('/activites-all', [ProductController::class, 'index'])->name('activites.index');
    Route::post('/activites/store', [ProductController::class, 'store'])->name('activites.store');
    Route::get('/activites-create/create', [ProductController::class, 'create'])->name('activites.create');
    Route::get('/activites/{product}/edit', [ProductController::class, 'edit'])->name('activites.edit');
    Route::post('/activites/{product}/update', [ProductController::class, 'update'])->name('activites.update');
    Route::get('/activites/{product}/destroy', [ProductController::class, 'destroy'])->name('activites.destroy');

    Route::get('/teams-all', [TeamController::class, 'index'])->name('teams.index');
    Route::post('/teams/store', [TeamController::class, 'store'])->name('teams.store');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
    Route::put('/teams/{team}/update', [TeamController::class, 'update'])->name('teams.update');
    Route::get('/teams/{team}/destroy', [TeamController::class, 'destroy'])->name('teams.destroy');

    Route::get('/temoignages-all', [TemoignageController::class, 'index'])->name('temoignages.index');
    Route::post('/temoignages/store', [TemoignageController::class, 'store'])->name('temoignages.store');
    Route::get('/temoignages/create', [TemoignageController::class, 'create'])->name('temoignages.create');
    Route::get('/temoignages/{temoignage}/edit', [TemoignageController::class, 'edit'])->name('temoignages.edit');
    Route::put('/temoignages/{temoignage}/update', [TemoignageController::class, 'update'])->name('temoignages.update');
    Route::get('/temoignages/{temoignage}/destroy', [TemoignageController::class, 'destroy'])->name('temoignages.destroy');

    Route::get('/organisations/create', [OrganisationController::class, 'create'])->name('organisations.create');
    Route::put('/organisations/{organisation}/update', [OrganisationController::class, 'update'])->name('organisations.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route to 404 page not found
Route::fallback(function(){
    $vieData['title'] = 'Erreur 404';
    return view('404')->with('viewData',$vieData);
});

require __DIR__.'/auth.php';
