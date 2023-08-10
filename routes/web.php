<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsCategories;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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


//Clients Routes
Route::get('/', function () {
    return '<h1 style="text-align: center;">WELCOME TO FBO</h1>';
})->name('home');
Route::prefix('categories')->group(function () {
    //Get categories
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    //Get detail - show form
    Route::get('edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    //Update Category
    Route::post('edit/{id}', [CategoriesController::class, 'updateCategory']);

    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    Route::post('/add', [CategoriesController::class, 'handleAddCategory'])->name('categories.add');

    Route::delete('/delete/{id}', [CategoriesController::class, 'deletedCategory'])->name('categories.delete');
});

//Admin

Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductsCategories::class)->middleware('auth.admin.product');
});


// Testing View helper

Route::get('/view-tutorial', function () {
    return view('viewTutorial', [
        'name' => 'John',
        'showMessage' => true,
        'items' => ['Item F1', 'Item 2', 'Item 3']
    ]);
});
