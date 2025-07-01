<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\AppointmentsController;
use App\Http\Controllers\Admin\SystemCalendarController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::redirect('/login', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    Route::delete('services/destroy', [ServicesController::class, 'massDestroy'])->name('services.massDestroy');
    Route::resource('services', ServicesController::class);

    Route::delete('employees/destroy', [EmployeesController::class, 'massDestroy'])->name('employees.massDestroy');
    Route::post('employees/media', [EmployeesController::class, 'storeMedia'])->name('employees.storeMedia');
    Route::resource('employees', EmployeesController::class);

    Route::delete('clients/destroy', [ClientsController::class, 'massDestroy'])->name('clients.massDestroy');
    Route::resource('clients', ClientsController::class);

    Route::delete('appointments/destroy', [AppointmentsController::class, 'massDestroy'])->name('appointments.massDestroy');
    Route::resource('appointments', AppointmentsController::class);

    Route::get('system-calendar', [SystemCalendarController::class, 'index'])->name('systemCalendar');
});
