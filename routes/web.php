<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PageCRUD;
use App\Http\Controllers\RoleCRUD;
use App\Http\Controllers\UserCrud;

use App\Models\Page;

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


Route::view('/','pages.homepage');

require __DIR__.'/auth.php';

Route::resource("/p", PageCRUD::class)->middleware("auth");
Route::resource("/r", RoleCRUD::class)->middleware("auth");
Route::resource("/u", UserCrud::class)->middleware("auth");


/////////////////////////////////////////////////////////////////////////////
$dataPage = Page::get();

if (isset($dataPage)) {
    
    $filter = ""; $l = "";
    
    foreach ($dataPage as $page) {
        $filter = $filter . $l . $page->getOriginal('slug');
        $l = "|";
    }

    Route::get("/{page}", PageController::class)->where('page', $filter);
    
    //TODO osmisliti kako da resolva slug konflikte.. osim prefiksa sufiksa

};