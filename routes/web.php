<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BusRouteController;
use App\Http\Controllers\SeatPlanController;
use App\Http\Controllers\SeatClassController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\BusScheduleController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::get('users', [UserController::class, 'index'])->name(
            'users.index'
        );
        Route::post('users', [UserController::class, 'store'])->name(
            'users.store'
        );
        Route::get('users/create', [UserController::class, 'create'])->name(
            'users.create'
        );
        Route::get('users/{user}', [UserController::class, 'show'])->name(
            'users.show'
        );
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name(
            'users.edit'
        );
        Route::put('users/{user}', [UserController::class, 'update'])->name(
            'users.update'
        );
        Route::delete('users/{user}', [UserController::class, 'destroy'])->name(
            'users.destroy'
        );

        Route::get('services', [ServiceController::class, 'index'])->name(
            'services.index'
        );
        Route::post('services', [ServiceController::class, 'store'])->name(
            'services.store'
        );
        Route::get('services/create', [
            ServiceController::class,
            'create',
        ])->name('services.create');
        Route::get('services/{service}', [
            ServiceController::class,
            'show',
        ])->name('services.show');
        Route::get('services/{service}/edit', [
            ServiceController::class,
            'edit',
        ])->name('services.edit');
        Route::put('services/{service}', [
            ServiceController::class,
            'update',
        ])->name('services.update');
        Route::delete('services/{service}', [
            ServiceController::class,
            'destroy',
        ])->name('services.destroy');

        Route::get('companies', [CompanyController::class, 'index'])->name(
            'companies.index'
        );
        Route::post('companies', [CompanyController::class, 'store'])->name(
            'companies.store'
        );
        Route::get('companies/create', [
            CompanyController::class,
            'create',
        ])->name('companies.create');
        Route::get('companies/{company}', [
            CompanyController::class,
            'show',
        ])->name('companies.show');
        Route::get('companies/{company}/edit', [
            CompanyController::class,
            'edit',
        ])->name('companies.edit');
        Route::put('companies/{company}', [
            CompanyController::class,
            'update',
        ])->name('companies.update');
        Route::delete('companies/{company}', [
            CompanyController::class,
            'destroy',
        ])->name('companies.destroy');

        Route::get('buses', [BusController::class, 'index'])->name(
            'buses.index'
        ); 
        Route::post('buses', [BusController::class, 'store'])->name(
            'buses.store'
        );
        Route::get('buses/create', [BusController::class, 'create'])->name(
            'buses.create'
        );
        Route::get('buses/{bus}', [BusController::class, 'show'])->name(
            'buses.show'
        );
        Route::get('buses/{bus}/edit', [BusController::class, 'edit'])->name(
            'buses.edit'
        );
        Route::put('buses/{bus}', [BusController::class, 'update'])->name(
            'buses.update'
        );
        Route::delete('buses/{bus}', [BusController::class, 'destroy'])->name(
            'buses.destroy'
        );

        Route::get('bus-routes', [BusRouteController::class, 'index'])->name(
            'bus-routes.index'
        );
        Route::post('bus-routes', [BusRouteController::class, 'store'])->name(
            'bus-routes.store'
        );
        Route::get('bus-routes/create', [
            BusRouteController::class,
            'create',
        ])->name('bus-routes.create');
        Route::get('bus-routes/{busRoute}', [
            BusRouteController::class,
            'show',
        ])->name('bus-routes.show');
        Route::get('bus-routes/{busRoute}/edit', [
            BusRouteController::class,
            'edit',
        ])->name('bus-routes.edit');
        Route::put('bus-routes/{busRoute}', [
            BusRouteController::class,
            'update',
        ])->name('bus-routes.update');
        Route::delete('bus-routes/{busRoute}', [
            BusRouteController::class,
            'destroy',
        ])->name('bus-routes.destroy');

        Route::get('bus-schedules', [
            BusScheduleController::class,
            'index',
        ])->name('bus-schedules.index');
        Route::post('bus-schedules', [
            BusScheduleController::class,
            'store',
        ])->name('bus-schedules.store');
        Route::get('bus-schedules/create', [
            BusScheduleController::class,
            'create',
        ])->name('bus-schedules.create');
        Route::get('bus-schedules/{busSchedule}', [
            BusScheduleController::class,
            'show',
        ])->name('bus-schedules.show');
        Route::get('bus-schedules/{busSchedule}/edit', [
            BusScheduleController::class,
            'edit',
        ])->name('bus-schedules.edit');
        Route::put('bus-schedules/{busSchedule}', [
            BusScheduleController::class,
            'update',
        ])->name('bus-schedules.update');
        Route::delete('bus-schedules/{busSchedule}', [
            BusScheduleController::class,
            'destroy',
        ])->name('bus-schedules.destroy');

        Route::get('seat-classes', [SeatClassController::class, 'index'])->name(
            'seat-classes.index'
        );
        Route::post('seat-classes', [
            SeatClassController::class,
            'store',
        ])->name('seat-classes.store');
        Route::get('seat-classes/create', [
            SeatClassController::class,
            'create',
        ])->name('seat-classes.create');
        Route::get('seat-classes/{seatClass}', [
            SeatClassController::class,
            'show',
        ])->name('seat-classes.show');
        Route::get('seat-classes/{seatClass}/edit', [
            SeatClassController::class,
            'edit',
        ])->name('seat-classes.edit');
        Route::put('seat-classes/{seatClass}', [
            SeatClassController::class,
            'update',
        ])->name('seat-classes.update');
        Route::delete('seat-classes/{seatClass}', [
            SeatClassController::class,
            'destroy',
        ])->name('seat-classes.destroy');

        Route::get('seat-plans', [SeatPlanController::class, 'index'])->name(
            'seat-plans.index'
        );
        Route::post('seat-plans', [SeatPlanController::class, 'store'])->name(
            'seat-plans.store'
        );
        Route::get('seat-plans/create', [
            SeatPlanController::class,
            'create',
        ])->name('seat-plans.create');
        Route::get('seat-plans/{seatPlan}', [
            SeatPlanController::class,
            'show',
        ])->name('seat-plans.show');
        Route::get('seat-plans/{seatPlan}/edit', [
            SeatPlanController::class,
            'edit',
        ])->name('seat-plans.edit');
        Route::put('seat-plans/{seatPlan}', [
            SeatPlanController::class,
            'update',
        ])->name('seat-plans.update');
        Route::delete('seat-plans/{seatPlan}', [
            SeatPlanController::class,
            'destroy',
        ])->name('seat-plans.destroy');
    });
   