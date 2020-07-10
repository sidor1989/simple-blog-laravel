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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/tag/{slug}', 'HomeController@tag')->name('tag.show');
Route::get('/category/{slug}', 'HomeController@category')->name('category.show');
Route::get('/article/{slug}', 'HomeController@article')->name('article.show');
Route::get('/search', 'HomeController@search')->name('search');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*
Route::post('article/{id}/comments', function ($id, App\Article $article) {
    request()->validate([
        'body' => 'required|min:3'
    ]);
    $article->addComment([
        'article_id' => (int) $id,
        'body' => request('body'),
        'parent_id' => request('parent_id', null)
    ]);

    return back();
})->middleware('auth')->name('article.comment');
*/
Auth::routes();


Route::get('/{slug}', 'PageController@index')->name('page');

