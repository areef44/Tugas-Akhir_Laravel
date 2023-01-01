<?php

use App\Http\Controllers\AuthController;
use App\Http\Livewire\Aboutus;
use App\Http\Livewire\Addcategory;
use App\Http\Livewire\Addpolice;
use App\Http\Livewire\Addreport;
use App\Http\Livewire\Addsector;
use App\Http\Livewire\Admin;
use App\Http\Livewire\Category;
use App\Http\Livewire\Cetakpdf;
use App\Http\Livewire\Editcategory;
use App\Http\Livewire\Editpolice;
use App\Http\Livewire\Editsector;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\LoginAdmin;
use App\Http\Livewire\LoginPolice;
use App\Http\Livewire\Makereport;
use App\Http\Livewire\Member;
use App\Http\Livewire\Officermanage;
use App\Http\Livewire\Police;
use App\Http\Livewire\Processed;
use App\Http\Livewire\Register;
use App\Http\Livewire\Report;
use App\Http\Livewire\Sector;
use App\Http\Livewire\Unprocessed;
use App\Models\Admin as ModelsAdmin;

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
    return view('index');
});

Route::get('/home', Home::class)->name('home');

Route::get('/register', Register::class)->name('register');

Route::get('/aboutus', Aboutus::class)->name('aboutus');

Route::get('/login', Login::class)->name('login');

Route::get('/login-police', LoginPolice::class)->name('login-police');


Route::get('/member', Member::class)->name('member')->middleware(['withAuth']);

Route::get('/addreport', Addreport::class)->name('addreport')->middleware(['withAuth']);

Route::get('/report', Report::class)->name('report')->middleware(['withAuth']);

Route::get('/makereport', Makereport::class)->name('makereport')->middleware(['withAuth']);

Route::get('/cetakpdf', Cetakpdf::class)->name('cetakpdf');


Route::get('/police', Police::class)->name('police')->middleware(['policeAuth']);

Route::get('/unprocessed', Unprocessed::class)->name('unprocessed')->middleware(['policeAuth']);

Route::get('/processed', Processed::class)->name('processed')->middleware(['policeAuth']);


Route::get('/login-admin', LoginAdmin::class)->name('login-admin');

Route::get('/admin', Admin::class)->name('admin')->middleware(['adminAuth']);

Route::get('/officermanage', Officermanage::class)->name('officermanage')->middleware(['adminAuth']);

Route::get('/sector', Sector::class)->name('sector')->middleware(['adminAuth']);

Route::get('/category', Category::class)->name('category')->middleware(['adminAuth']);

Route::get('/addsector', Addsector::class)->name('addsector')->middleware(['adminAuth']);

Route::get('/editsector', Editsector::class)->name('editsector')->middleware(['adminAuth']);

Route::get('/addcategory', Addcategory::class)->name('addcategory')->middleware(['adminAuth']);

Route::get('/editcategory', Editcategory::class)->name('editcategory')->middleware(['adminAuth']);

Route::get('/addpolice', Addpolice::class)->name('addpolice')->middleware(['adminAuth']);

Route::get('/editpolice', Editpolice::class)->name('editpolice')->middleware(['adminAuth']);



// Route::any("/login", [AuthController::class, "login"])
//     ->name('login')
//     ->middleware(["noAuth"]);

Route::any("/logout", [AuthController::class, "logout"])
    ->name('logout');


Route::any("/logoutpolice", [AuthController::class, "logoutPolice"])
    ->name('logoutpolice');


Route::any("/logoutadmin", [AuthController::class, "logoutAdmin"])
    ->name('logoutadmin');
