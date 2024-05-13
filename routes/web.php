<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SinglePageController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tails', [\App\Http\Controllers\Frontend\TailController::class, 'index'])->name('tails');
Route::get('/story', [\App\Http\Controllers\Frontend\TailController::class, 'story'])->name('story');
Route::get('/tails/load-more', [\App\Http\Controllers\Frontend\TailController::class, 'loadMorePosts'])->name('tails.loadMore');
Route::get('/kicash', [HomeController::class, 'kicash'])->name('kicash');
Route::get('/surtash', [HomeController::class, 'surtash'])->name('surtash');
Route::get('/persons', [HomeController::class, 'persons'])->name('persons');
Route::get('/poesy', [HomeController::class, 'poesy'])->name('poesy');
Route::get('/video', [HomeController::class, 'videos'])->name('videos');
Route::get('/dictionary', [HomeController::class, 'dictionary'])->name('dictionary');
Route::get('/magazines', [HomeController::class, 'magazines'])->name('magazines');
Route::get('/search', [HomeController::class, 'search'])->name('homepageSearch');
Route::get('/know-republic/{republic}', [SinglePageController::class, 'republicSingle'])->name('republicSingle');
Route::get('/person/{people}', [SinglePageController::class, 'personSingle'])->name('personSingle');
Route::get('/tails/{post}', [\App\Http\Controllers\Frontend\TailController::class, 'tailSingle'])->name('tailSingle');




Route::get('/dashboard', [App\Http\Controllers\Frontend\ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard-search', [App\Http\Controllers\Frontend\ProfileController::class, 'searchProfile'])->middleware(['auth', 'verified'])->name('dashboard.search');
Route::get('/profile-single', [App\Http\Controllers\Frontend\ProfileController::class, 'profileSingle'])->middleware(['auth', 'verified'])->name('profileSingle');


Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/application', [Admin\ApplicationController::class, 'index'])->name('application-index');
    Route::post('/application/store', [Admin\ApplicationController::class, 'store'])->name('application');
    Route::get('/application/{application}', [Admin\ApplicationController::class, 'show'])->name('application-show');
    Route::delete('/application/{application}', [Admin\ApplicationController::class, 'destroy'])->name('application-destroy');

});


Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {


    Route::get('/admin', [Admin\IndexController::class, 'index'])->name('admin-index');
    Route::match(['get', 'post'], '/admin/search', [Admin\SearchController::class, '__invoke'])->name('admin.search');
    Route::group(['namespace' => 'Category', 'prefix' => 'admin'], function () {
        Route::get('/categories', [Admin\Category\IndexController::class, '__invoke'])->name('admin.categories.index');
        Route::get('/categories/create', [Admin\Category\CreateController::class, '__invoke'])->name('admin.categories.create');
        Route::post('/categories/store', [Admin\Category\StoreController::class, '__invoke'])->name('admin.categories.store');
        Route::get('/categories/{category}/edit', [Admin\Category\EditController::class, '__invoke'])->name('admin.categories.edit');
        Route::patch('/categories/{category}', [Admin\Category\UpdateController::class, '__invoke'])->name('admin.categories.update');
        Route::delete('/categories/{category}', [Admin\Category\DestroyController::class, '__invoke'])->name('admin.categories.delete');
    });

    Route::group(['namespace' => 'Post', 'prefix'=>'admin'], function () {
        Route::get('/post', [Admin\Post\IndexController::class, '__invoke'])->name('admin.post.index');
        Route::get('/post/create', [Admin\Post\CreateController::class, '__invoke'])->name('admin.post.create');
        Route::get('/post/{post}', [Admin\Post\ShowController::class, '__invoke'])->name('admin.post.show');
        Route::post('/post/store', [Admin\Post\StoreController::class, '__invoke'])->name('admin.post.store');
        Route::get('/post/{post}/edit', [Admin\Post\EditController::class, '__invoke'])->name('admin.post.edit');
        Route::patch('/post/{post}', [Admin\Post\UpdateController::class, '__invoke'])->name('admin.post.update');
        Route::delete('/post/{post}', [Admin\Post\DestroyController::class, '__invoke'])->name('admin.post.delete');
        Route::post('/filter-posts', [Admin\Post\FilterController::class, '__invoke'])->name('admin.post.filter');
    });

    Route::group(['namespace' => 'Magazine', 'prefix'=>'admin'], function () {
        Route::get('/magazines', [Admin\Magazine\IndexController::class, '__invoke'])->name('admin.magazine.index');
        Route::get('/magazines/create', [Admin\Magazine\CreateController::class, '__invoke'])->name('admin.magazine.create');
        Route::get('/magazines/{magazine}', [Admin\Magazine\ShowController::class, '__invoke'])->name('admin.magazine.show');
        Route::post('/magazines/store', [Admin\Magazine\StoreController::class, '__invoke'])->name('admin.magazine.store');
        Route::get('/magazines/{magazine}/edit', [Admin\Magazine\EditController::class, '__invoke'])->name('admin.magazine.edit');
        Route::patch('/magazines/{magazine}', [Admin\Magazine\UpdateController::class, '__invoke'])->name('admin.magazine.update');
        Route::delete('/magazines/{magazine}', [Admin\Magazine\DestroyController::class, '__invoke'])->name('admin.magazine.delete');
    });

    Route::group(['namespace' => 'Surt', 'prefix'=>'admin'], function () {
        Route::get('/surtash', [Admin\Surt\IndexController::class, '__invoke'])->name('admin.surt.index');
        Route::get('/surtash/create', [Admin\Surt\CreateController::class, '__invoke'])->name('admin.surt.create');
        Route::get('/surtash/{surt}', [Admin\Surt\ShowController::class, '__invoke'])->name('admin.surt.show');
        Route::post('/surtash/store', [Admin\Surt\StoreController::class, '__invoke'])->name('admin.surt.store');
        Route::get('/surtash/{surt}/edit', [Admin\Surt\EditController::class, '__invoke'])->name('admin.surt.edit');
        Route::patch('/surtash/{surt}', [Admin\Surt\UpdateController::class, '__invoke'])->name('admin.surt.update');
        Route::delete('/surtash/{surt}', [Admin\Surt\DestroyController::class, '__invoke'])->name('admin.surt.delete');

    });


    Route::group(['namespace' => 'Republic', 'prefix'=>'admin'], function () {
        Route::get('/know-republic', [Admin\Republic\IndexController::class, '__invoke'])->name('admin.republic.index');
        Route::get('/know-republic/create', [Admin\Republic\CreateController::class, '__invoke'])->name('admin.republic.create');
        Route::get('/know-republic/{republic}', [Admin\Republic\ShowController::class, '__invoke'])->name('admin.republic.show');
        Route::post('/know-republic/store', [Admin\Republic\StoreController::class, '__invoke'])->name('admin.republic.store');
        Route::get('/know-republic/{republic}/edit', [Admin\Republic\EditController::class, '__invoke'])->name('admin.republic.edit');
        Route::patch('/know-republic/{republic}', [Admin\Republic\UpdateController::class, '__invoke'])->name('admin.republic.update');
        Route::delete('/know-republic/{republic}', [Admin\Republic\DestroyController::class, '__invoke'])->name('admin.republic.delete');
    });

    Route::group(['namespace' => 'FamousPeople', 'prefix'=>'admin'], function () {
        Route::get('/famous', [Admin\FamousPeople\IndexController::class, '__invoke'])->name('admin.famous.index');
        Route::get('/famous/create', [Admin\FamousPeople\CreateController::class, '__invoke'])->name('admin.famous.create');
        Route::get('/famous/{famousPeople}', [Admin\FamousPeople\ShowController::class, '__invoke'])->name('admin.famous.show');
        Route::post('/famous/store', [Admin\FamousPeople\StoreController::class, '__invoke'])->name('admin.famous.store');
        Route::get('/famous/{famousPeople}/edit', [Admin\FamousPeople\EditController::class, '__invoke'])->name('admin.famous.edit');
        Route::patch('/famous/{famousPeople}', [Admin\FamousPeople\UpdateController::class, '__invoke'])->name('admin.famous.update');
        Route::delete('/famous/{famousPeople}', [Admin\FamousPeople\DestroyController::class, '__invoke'])->name('admin.famous.delete');
    });

    Route::group(['namespace' => 'Author', 'prefix'=>'admin'], function () {
        Route::get('/authors', [Admin\Author\IndexController::class, '__invoke'])->name('admin.authors.index');
        Route::get('/authors/create', [Admin\Author\CreateController::class, '__invoke'])->name('admin.authors.create');
        Route::get('/authors/{author}', [Admin\Author\ShowController::class, '__invoke'])->name('admin.authors.show');
        Route::post('/authors/store', [Admin\Author\StoreController::class, '__invoke'])->name('admin.authors.store');
        Route::get('/authors/{author}/edit', [Admin\Author\EditController::class, '__invoke'])->name('admin.authors.edit');
        Route::patch('/authors/{author}', [Admin\Author\UpdateController::class, '__invoke'])->name('admin.authors.update');
        Route::delete('/authors/{author}', [Admin\Author\DestroyController::class, '__invoke'])->name('admin.authors.delete');
    });

    Route::group(['namespace' => 'Word', 'prefix'=>'admin'], function () {
        Route::get('/words', [Admin\Word\IndexController::class, '__invoke'])->name('admin.words.index');
        Route::get('/words/create', [Admin\Word\CreateController::class, '__invoke'])->name('admin.words.create');
        Route::get('/words/{word}', [Admin\Word\ShowController::class, '__invoke'])->name('admin.words.show');
        Route::post('/words/store', [Admin\Word\StoreController::class, '__invoke'])->name('admin.words.store');
        Route::get('/words/{word}/edit', [Admin\Word\EditController::class, '__invoke'])->name('admin.words.edit');
        Route::patch('/words/{word}', [Admin\Word\UpdateController::class, '__invoke'])->name('admin.words.update');
        Route::delete('/words/{word}', [Admin\Word\DestroyController::class, '__invoke'])->name('admin.words.delete');
    });

    Route::group(['namespace' => 'Poesy', 'prefix'=>'admin'], function () {
        Route::get('/poesy', [Admin\Poesy\IndexController::class, '__invoke'])->name('admin.poesy.index');
        Route::get('/poesy/create', [Admin\Poesy\CreateController::class, '__invoke'])->name('admin.poesy.create');
        Route::get('/poesy/{poesy}', [Admin\Poesy\ShowController::class, '__invoke'])->name('admin.poesy.show');
        Route::post('/poesy/store', [Admin\Poesy\StoreController::class, '__invoke'])->name('admin.poesy.store');
        Route::get('/poesy/{poesy}/edit', [Admin\Poesy\EditController::class, '__invoke'])->name('admin.poesy.edit');
        Route::patch('/poesy/{poesy}', [Admin\Poesy\UpdateController::class, '__invoke'])->name('admin.poesy.update');
        Route::delete('/poesy/{poesy}', [Admin\Poesy\DestroyController::class, '__invoke'])->name('admin.poesy.delete');
        Route::post('/filter-poesy', [Admin\Poesy\FilterController::class, '__invoke'])->name('admin.poesy.filter');
    });

    Route::group(['namespace' => 'Video', 'prefix'=>'admin'], function () {
        Route::get('/videos', [Admin\Video\IndexController::class, '__invoke'])->name('admin.videos.index');
        Route::get('/videos/create', [Admin\Video\CreateController::class, '__invoke'])->name('admin.videos.create');
        Route::get('/videos/{video}', [Admin\Video\ShowController::class, '__invoke'])->name('admin.videos.show');
        Route::post('/videos/store', [Admin\Video\StoreController::class, '__invoke'])->name('admin.videos.store');
        Route::get('/videos/{video}/edit', [Admin\Video\EditController::class, '__invoke'])->name('admin.videos.edit');
        Route::patch('/videos/{video}', [Admin\Video\UpdateController::class, '__invoke'])->name('admin.videos.update');
        Route::delete('/videos/{video}', [Admin\Video\DestroyController::class, '__invoke'])->name('admin.videos.delete');
    });

    Route::group(['namespace' => 'Kica', 'prefix'=>'admin'], function () {
        Route::get('/kica', [Admin\Kica\IndexController::class, '__invoke'])->name('admin.kica.index');
        Route::get('/kica/create', [Admin\Kica\CreateController::class, '__invoke'])->name('admin.kica.create');
        Route::get('/kica/{kica}', [Admin\Kica\ShowController::class, '__invoke'])->name('admin.kica.show');
        Route::post('/kica/kica', [Admin\Kica\StoreController::class, '__invoke'])->name('admin.kica.store');
        Route::get('/kica/{kica}/edit', [Admin\Kica\EditController::class, '__invoke'])->name('admin.kica.edit');
        Route::patch('/kica/{kica}', [Admin\Kica\UpdateController::class, '__invoke'])->name('admin.kica.update');
        Route::delete('/kica/{kica}', [Admin\Kica\DestroyController::class, '__invoke'])->name('admin.kica.delete');
    });


    Route::group(['namespace' => 'User', 'prefix'=>'admin'], function () {
        Route::get('/user', [Admin\User\IndexController::class, '__invoke'])->name('admin.user.index');
        Route::get('/user/create', [Admin\User\CreateController::class, '__invoke'])->name('admin.user.create');

        Route::post('/user/store', [Admin\User\StoreController::class, '__invoke'])->name('admin.user.store');
        Route::get('/user/{user}/edit', [Admin\User\EditController::class, '__invoke'])->name('admin.user.edit');
        Route::patch('/user/{user}', [Admin\User\UpdateController::class, '__invoke'])->name('admin.user.update');
        Route::delete('/user/{user}', [Admin\User\DestroyController::class, '__invoke'])->name('admin.user.delete');
    });





});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
