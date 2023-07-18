<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PageCRUD;
use App\Http\Controllers\RoleCRUD;
use App\Http\Controllers\UserCrud;
use App\Http\Controllers\NavMenuController;

use App\Models\Page;
use App\Models\NavMenu;
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

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

$data = NavMenu::with('page')->get();
Route::view('/','pages.homepage', compact('data'));

require __DIR__.'/auth.php';

Route::resource("/p", PageCRUD::class)->middleware("auth");
Route::resource("/r", RoleCRUD::class)->middleware("auth");
Route::resource("/u", UserCrud::class)->middleware("auth");
Route::resource("/n", NavMenuController::class)->middleware("auth");


///////////////////////////////////////////////////////////////////////////
$dataPage = Page::get();

if (isset($dataPage)) {
    
    $filter = ""; $l = "";
    
    foreach ($dataPage as $page) {
        $filter = $filter . $l . $page->getOriginal('slug');
        $l = "|";
    }

    Route::get("/{page}", PageController::class)->where('page', $filter);
    

};