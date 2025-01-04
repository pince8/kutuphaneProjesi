<?php

use App\Http\Controllers\AuthorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicatorController;
use App\Http\Controllers\BookController;

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
    return view('front.layout.app');
});

Route::post('/adminTest', function () {
    return view('front.admin.index');
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


///KATEGORİ ROTALARI START ///

Route::get('/kategoriler', [CategoryController::class, 'listPage'])->name('kategorilerListPage');
Route::get('/kategoriler/create',[CategoryController::class,'createPage'])->name('kategorilerOlustur');
Route::post('/kategoriler/create/post',[CategoryController::class,'addToDB'])->name('kategoriEkle');

Route::get('/kategoriler/update/{id}', [CategoryController::class, 'updatePage'])->name('kategorilerUpdatePage');
Route::post('/kategoriler/update/post',[CategoryController::class,'updateCategory'])->name('kategoriGuncelle');
Route::get('/kategoriler/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('panel.categoryDelete');
/// KATEGORİ ROTALARI END ///


///GİRİŞ ÜYE OLMA KATEGORİLERİ//



Route::get('/uyeOl', function () {
    return view('front.admin.register');
})->name('uyeOl');

Route::get('/girisYap', function () {
    return view('front.admin.login');
})->name('girisYap');




///END

///YAZAR ROTALARI///
Route::post('/yazarEkle',[AuthorsController::class,'createAuthor'])->name('yazarEkle');
Route::get('/yazarEklemeSayfasi',[AuthorsController::class,'yazarpage'])->name('yazarSayfasi');
Route::get('/yazarListesi',[AuthorsController::class,'listAuthors'])->name('yazarListesi');
Route::get('/yazarlar/update/{id}', [AuthorsController::class, 'updatePage'])->name('yazarlarUpdatePage');
Route::post('/yazarlar/update/post',[AuthorsController::class,'updateAuthor'])->name('yazarlarGuncelle');
Route::get('/yazarlar/delete/{id}', [AuthorsController::class, 'authorDelete'])->name('panel.authorDelete');
///END

///YAYINEVLEİ ROTALARI///
Route::post('/publicatorEkle',[PublicatorController::class,'createPublicator'])->name('publicatorEkle');
Route::get('/publicatorEklemeSayfasi',[PublicatorController::class,'publicatorpage'])->name('publicatorSayfasi');
Route::get('/publicatorListesi',[PublicatorController::class,'listPublicators'])->name('publicatorListesi');
Route::get('/publicators/update/{id}', [PublicatorController::class, 'updatePage'])->name('publicatorUpdatePage');
Route::post('/publicators/update/post',[PublicatorController::class,'updatePublicator'])->name('publicatorGuncelle');
Route::get('/publicators/delete/{id}', [PublicatorController::class, 'publicatorDelete'])->name('panel.publicatorDelete');

///END

///BOOK ROTALARI///
Route::post('/bookEkle',[BookController::class,'createBook'])->name('bookEkle');
Route::get('/bookEkleEklemeSayfasi',[BookController::class,'bookpage'])->name('bookSayfasi');
Route::get('/bookListesi',[BookController::class,'listBooks'])->name('bookListesi');
Route::get('/books/update/{id}', [BookController::class, 'updatePage'])->name('bookUpdatePage');
Route::post('/books/update/post',[BookController::class,'updateBook'])->name('bookGuncelle');
Route::get('/books/delete/{id}', [BookController::class, 'bookDelete'])->name('panel.bookDelete');
///END