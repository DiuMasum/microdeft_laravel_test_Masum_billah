<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admindashboard');
        Route::get('/admin/blood-group', 'BloodGroup')->name('bloodgroup');
        Route::get('/admin/edit-blood/{id}', 'Editblood')->name('editblood');
        Route::post('/admin/update-blood', 'Updateblood')->name('updateblood');
        Route::get('/admin/delete-blood/{id}', 'DeleteBlood')->name('deleteblood');
        Route::get('/admin/doonerlist', 'Doonerlist')->name('doonerlist');
    });




});
