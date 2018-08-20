<?php

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
 
Route::get('registration', 'UserController@create');
Route::post('/registration', 'UserController@store')->name('register');
//Route::post('/verify/{sign_up_string},/{user_id}', 'UserController@verify');


Route::get('login', 'UserController@login')->name('login');
Route::post('loginprocess', 'UserController@loginprocess')->name('userlogging');

Route::get('userlist', 'UserController@userlist');

//Route::get('addarticle', 'ArticleController@articleFormDisplay')->name('articlename');
//Route::get('articlelistdisplay','ArticleController@articleListDisplay')->middleware('Userauthentication');
//Route::put('/updatearticle/{article_id}','ArticleController@UpdateArticle')->name('updatearticle');



Auth::routes();

Route::group(['middleware' => ['Userauthentication']], function () {

    Route::get('articlelistdisplay', 'ArticleController@articleListDisplay');
    Route::get('addarticle', 'ArticleController@articleFormDisplay')->name('articlename');
    Route::post('articleprocess', 'ArticleController@articleFormProcessing')->name('articleprocess');
    Route::get('/articleedit/{article_id}','ArticleController@articleEdit');
    Route::put('/updatearticle/{article_id}','ArticleController@UpdateArticle')->name('updatearticle');
    Route::get('articledelete/{article_id}','ArticleController@DeleteArticle')->name('articledelete');
    Route::any('logoutarticle','UserController@LogoutArticle');
    Route::get('userlist','UserController@userList');
    Route::get('userarticlelist','UserController@userarticleList');

});



 Route::get('/edit_user/{id}', ['uses' => 'UserController@edit']);
/*
Auth::routes();
 */
Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/articlelist', 'userController');

/*
Route::get('sample-restful-apis', function()
{
    return array(
      1 => "expertphp",
      2 => "demo"
    );
});

Route::group(array('prefix' => 'api-V1'), function() {
    Route::resource('restful-apis','UserappController');
});
*/
