<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagemenuController;
use App\Http\Controllers\RegistermenuController;
use App\Http\Controllers\RegistertableController;
use App\Http\Controllers\RegisterserverController;
use App\Http\Controllers\admin\DashboardAdminContoller;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\RegisterCategoriemenuController;
use App\Http\Controllers\admin\PlanificationAdminContoller;
use App\Http\Controllers\authentications\AuthentificationSessionController;


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



// Route pour la page Acceuil /home page

Route::get('/', function(){
    return view('content\indexpage');
});

$controller_path = 'App\Http\Controllers';
/* Route autoriser sans être connecter */ 
Route::resource('register-basic', RegisterBasic::class);
// authentication
Route::get('/auth/login-basic', [AuthentificationSessionController::class, 'create'])->name('auth-login-basic');

Route::post('/auth/login-basic', [AuthentificationSessionController::class, 'store'])->name('login');

Route::post('logout', $controller_path . '\authentications\AuthentificationSessionController@destroy')->name('logout');

//Route::post('/auth/login-basic', $controller_path . '\authentications\AuthentificationSessionController@store')->name('auth-login-basic');

Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');

Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

//


/* Route autoriser apres authentification  */
Route::group(['middleware' => ['auth']], function(){
    $controller_path = 'App\Http\Controllers';
// Main Page Route
Route::get('/dashboard', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');

// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');



// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');


});

                                           


Route::group(['middleware' => ['auth', 'role:admin']], function(){
    // Route menant au controller de lecture, d'enregistrement et d'edite du serveur
Route::resource('/serveur/resgister_server', RegisterserverController::class);
Route::get('/serveur/list', [RegisterserverController::class, 'showlist']);
// route vers la table
Route::resource('resgister_table', RegistertableController::class);
// route vers le menu
Route::resource('resgister_menu', RegistermenuController::class);
Route::resource('page_menu', PagemenuController::class);
// Route de gestion Admin
Route::resource('dashboard/admin', DashboardAdminContoller::class);
Route::resource('planification', PlanificationAdminContoller::class);
});


Route::group(['middleware' => ['auth', 'role:superadministrator']], function(){
    // Route menant au controller de lecture, d'enregistrement et d'edite du serveur
Route::resource('/serveur/resgister_server', RegisterserverController::class);
Route::get('/serveur/list', [RegisterserverController::class, 'showlist']);
// route vers la table
Route::resource('resgister_table', RegistertableController::class);
Route::get('resgister_table', [RegistertableController::class, 'showtable']);
// route vers le menu
Route::resource('resgister_menu', RegistermenuController::class);
Route::resource('page_menu', PagemenuController::class);
// route vers Categorie menu
Route::resource('register_categorie_menu', RegisterCategoriemenuController::class);
Route::get('register_categorie_menu', [RegisterCategoriemenuController::class, 'showcat']);
});