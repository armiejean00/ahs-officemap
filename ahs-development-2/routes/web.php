<?php

use App\Http\Controllers\AvailableDeskController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DeskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FloorPlanController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Desk;
use App\Models\Booking;
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

Route::get('/', function () {
    return view('landing');
});

Route::get('/users/register', [UserController::class, 'register'])->middleware('guest');

Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/users/sign_in', [UserController::class, 'sign_in'])->name('login')->middleware('guest');

Route::post('/sign_in', [UserController::class, 'authenticate'])->middleware('guest');

Route::get('/hold', [UserController::class, 'hold']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/dashboard.css',
        ],
        'title' => 'Dashboard | ApexHubSpot'
    ]);
})->middleware(['auth', 'hold']);

Route::get('/office_map', function () {
    return view('office_map', [
        'cssPaths' => [
            'resources/css/main/office_map.css',
        ],
        'title' => 'Office Map | ApexHubSpot'
    ]);
})->middleware(['auth', 'hold']);

Route::get('/faqs', function () {
    return view('faqs', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/faqs.css',
        ],
        'title' => 'Frequently Asked Questions | ApexHubSpot'
    ]);
})->middleware('auth');

Route::get('/guide', function () {
    return view('guide', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/faqs.css',
            'resources/css/main/guide.css',
        ],
        'title' => 'User Guide | ApexHubSpot'
    ]);
})->middleware('auth');

// Common Resource Routes:
// index - Show all items
// show - Show single item
// create - Show form to create new item
// store - Store new item
// edit - Show form to edit item
// update - Update item
// destroy - Delete item


// UserController
Route::get('/users', [UserController::class, 'index'])->middleware(['auth', 'hold', 'admin']);

// for creating item
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth', 'hold', 'admin']);

Route::post('/users', [UserController::class, 'admin_store'])->middleware(['auth', 'hold', 'office_manager']);

// for editing item
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware(['auth', 'hold', 'admin']);

Route::put('/users/{user}/edit', [UserController::class, 'update'])->middleware(['auth', 'hold', 'admin']);

Route::put('/users/{user}', [UserController::class, 'approve'])->middleware(['auth', 'hold', 'office_manager']);

Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware(['auth', 'hold', 'admin']);


// DeskController
Route::get('/desks', [DeskController::class, 'index'])->middleware(['auth', 'hold', 'office_manager']);

Route::get('/desks/create', [DeskController::class, 'create'])->middleware(['auth', 'hold', 'office_manager']);

Route::post('/desks', [DeskController::class, 'store'])->middleware(['auth', 'hold', 'office_manager']);

Route::put('/desks/{desk}', [DeskController::class, 'availability'])->middleware(['auth', 'hold', 'office_manager']);

Route::delete('/desks/{desk}', [DeskController::class, 'destroy'])->middleware(['auth', 'hold', 'office_manager']);


// BookingController
Route::get('/bookings', [BookingController::class, 'index'])->middleware(['auth', 'hold', 'office_manager']);

Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->middleware(['auth', 'hold', 'office_manager']);

Route::put('/book/{available_desk}', [BookingController::class, 'book'])->middleware(['auth', 'hold']);

Route::get('/profile', [BookingController::class, 'profile'])->middleware(['auth', 'hold']);

Route::delete('/profile/bookings/{booking}', [BookingController::class, 'destroy_self'])->middleware(['auth', 'hold']);

// ? Waiting for confirmation to merge available_desks to bookings
// AvailableDeskController
Route::get('/desks/available', [AvailableDeskController::class, 'index'])->middleware(['auth', 'hold']);

Route::get('/desks/available/search', [AvailableDeskController::class, 'show'])->middleware(['auth', 'hold']);


// DashboardController
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'hold']);

// * UNUSED ROUTES

// Route::get('/roles', function () {
//     return view('roles', [
//         'cssPaths' => [
//             'resources/css/main/content.css',
//             'resources/css/main/content2.css',
//             'resources/css/main/roles.css',
//         ],
//         'title' => 'Manage Roles | ApexHubSpot'
//     ]);
// })->middleware('auth');

// Route::get('/bookings/history', [BookingController::class, 'history'])->middleware('auth');

// Show route should be always at the last line after preceeding paths
// Route::get('/users/{user}', [UserController::class, 'show'])->middleware('auth');
