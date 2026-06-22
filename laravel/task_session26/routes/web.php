<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\categoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home' ,[PageController::class,'home'])->name('home');
Route::get('/about' ,[PageController::class,'about'])->name('about');
Route::get('/contact' ,[PageController::class,'contact'])->name('contact');
Route::post('/create_contact' ,[PageController::class,'create_contact'])->name('create_content');
Route::get('/single-blog', [PageController::class, 'singleBlog'])->name('single.blog');

Route::get('/create-category', [categoryController::class, 'create_category']);

Route::get('/categories', [categoryController::class, 'get_categories ']);

Route::get('/update-category', [categoryController::class, 'update_category']);

Route::get('/delete-category', [categoryController::class, 'delete_category']);
?>
