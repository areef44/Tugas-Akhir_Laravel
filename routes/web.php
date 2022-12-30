<?php

use App\Http\Livewire\Aboutus;
use App\Http\Livewire\Addcategory;
use App\Http\Livewire\Addmember;
use App\Http\Livewire\Addpolice;
use App\Http\Livewire\Addreport;
use App\Http\Livewire\Addsector;
use App\Http\Livewire\Admin;
use App\Http\Livewire\Category;
use App\Http\Livewire\Editcategory;
use App\Http\Livewire\Editpolice;
use App\Http\Livewire\Editsector;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Makereport;
use App\Http\Livewire\Member;
use App\Http\Livewire\Officermanage;
use App\Http\Livewire\Police;
use App\Http\Livewire\Processed;
use App\Http\Livewire\Register;
use App\Http\Livewire\Report;
use App\Http\Livewire\Sector;
use App\Http\Livewire\Unprocessed;

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

Route::get('/addmember', Addmember::class)->name('addmember');

Route::get('/aboutus', Aboutus::class)->name('aboutus');

Route::get('/login', Login::class)->name('login');


Route::get('/member', Member::class)->name('member');

Route::get('/addreport', Addreport::class)->name('addreport');

Route::get('/report', Report::class)->name('report');

Route::get('/makereport', Makereport::class)->name('makereport');


Route::get('/police', Police::class)->name('police');

Route::get('/unprocessed', Unprocessed::class)->name('unprocessed');

Route::get('/processed', Processed::class)->name('processed');


Route::get('/admin', Admin::class)->name('admin');

Route::get('/officermanage', Officermanage::class)->name('officermanage');

Route::get('/sector', Sector::class)->name('sector');

Route::get('/category', Category::class)->name('category');

Route::get('/addsector', Addsector::class)->name('addsector');

Route::get('/editsector', Editsector::class)->name('editsector');

Route::get('/addcategory', Addcategory::class)->name('addcategory');

Route::get('/editcategory', Editcategory::class)->name('editcategory');

Route::get('/addpolice', Addpolice::class)->name('addpolice');

Route::get('/editpolice', Editpolice::class)->name('editpolice');
