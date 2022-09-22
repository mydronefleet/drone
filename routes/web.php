<?php



use Illuminate\Support\Facades\Route;

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



Auth::routes();



Route::group(['middleware' => ['auth']], function() {
	Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home/showfleets/{name}', [App\Http\Controllers\HomeController::class, 'showFleets'])->name('showFleets');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('fleets', App\Http\Controllers\FleetController::class);
    Route::resource('flights', App\Http\Controllers\FlightController::class);
    Route::resource('missions', App\Http\Controllers\MissionController::class);
    Route::resource('rpics', App\Http\Controllers\RpicController::class);
    Route::resource('organizations', App\Http\Controllers\OrganizationController::class);
	Route::resource('sops', App\Http\Controllers\SopsController::class);
    /**
    * Logout Route
    */
    Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/organizations/leadershow/{id}', [App\Http\Controllers\OrganizationController::class, 'leadershow'])->name('leadershow');
    Route::get('/organizations/leaderedit/{id}', [App\Http\Controllers\OrganizationController::class, 'leaderedit'])->name('leaderedit');
    Route::post('/organizations/updateleader/{id}', [App\Http\Controllers\OrganizationController::class, 'updateleader'])->name('updateleader');
    Route::get('/send-mail/{id}', [App\Http\Controllers\MissionController::class, 'sendNotificationEmail'])->name('sendmail');
    Route::get('/missions/change_status/{id}', [App\Http\Controllers\MissionController::class, 'changeStatus'])->name('change-status');
});