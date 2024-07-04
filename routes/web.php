<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\digitalbuldgeController;
Route::view('/', 'digitalbuldge.index');
Route::get('2d-animation',  [digitalbuldgeController::class, 'ddanimation']);
Route::get('3d-animation',[digitalbuldgeController::class, 'dddanimation']);
Route::view('contact', 'digitalbuldge.contact');
Route::get('explainer-video',[digitalbuldgeController::class, 'explainer_video']);
Route::get('logo-animation', [digitalbuldgeController::class, 'logo_animation']);
Route::get('motion-graphic', [digitalbuldgeController::class, 'motiongraphic']);
Route::view('portfolio', 'digitalbuldge.portfolio');
Route::get('pricing', [digitalbuldgeController::class, 'showPricing']);
Route::get('whiteboard-animation', [digitalbuldgeController::class, 'whiteboard_animation']);
Route::post('contact', [digitalbuldgeController::class, 'sendmessage'])->name('contact.store');
Route::view('privacy', 'digitalbuldge.privacy');
Route::view('terms', 'digitalbuldge.terms');
Route::get('dashboard', function () {
    if (Auth::check()  ) {
        if(Auth::user()->role == 'Admin'){ return view('admin.index');}
    } else {
        return view('dashboard');
    }
})->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
//Admin
Route::middleware('auth')->group(function () {
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/'); // Redirect to the home page or wherever you want after logout
    })->name('logout');
    Route::get('Admin/Adduser', [AdminController::class, 'Adduser'])->name('Admin.Adduser');
    Route::get('Admin/viewuser', [AdminController::class, 'viewuser'])->name('Admin.viewuser');
    Route::get('Admin/contacts', [AdminController::class, 'message'])->name('Admin.message');
    Route::get('/admin/messages/{id}/handle/{status}', [AdminController::class, 'updatemessagestatus'])->name('admin.handleStatus');
    Route::post('CreateUser', [AdminController::class, 'register'])->name('CreateUser');
    Route::get('Admin/packeges',[AdminController::class, 'packages']);
    Route::post('Createpackages', [AdminController::class, 'packageStore'])->name('Createpackages');
    Route::get('/freeze-user/{id}', [AdminController::class, 'freezeUser'])->name('freeze-user');
    Route::get('/unfreeze-user/{id}', [AdminController::class, 'unfreezeUser'])->name('unfreeze-user');
    Route::post('Admin/updatePackage/{id}', [AdminController::class, 'updatePackage'])->name('Admin/updatePackage');

});

require __DIR__.'/auth.php';
