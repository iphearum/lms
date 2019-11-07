<?php
use App\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

Route::group([
	'namespace' => 'Frontend',
], function () {
	Route::get('/', 'ListBookController@index')->name('index');
	Route::get('/category', 'ListBookController@index');
	Route::get('/category/{id}', 'ListBookController@byCategory')->name('bycategory');
	Route::get('view/{id}', 'ListBookController@show')->name('view.show');
	Route::get('/users/profile', 'UserController@profile')->name('admin.user.profile');
	Route::post('/users/profile', 'UserController@uploadImage')->name('admin.user.uploadImage');
	Route::get('/users/setting', 'UserController@setting')->name('admin.user.setting');
	Route::get('/users/support', 'UserController@support')->name('admin.user.support');
});

Auth::routes();

// middleware
Route::group([
	'middleware' => [
		'auth',
		'role:admin|owner',
	],
], function () {
	Route::resource('/book', 'Frontend\BookController');
});

/**
 * Protected routes for Admin only
 */
Route::group([
	'prefix' => 'admin',
	'namespace' => 'Admin',
	'middleware' => ['auth', 'admin_access'],
], function () {
	// Route::resource('/book','Frontend\BookController');
	Route::get('/', 'DashboardController@index')->name('admin.dashboard');
	Route::get('/users', 'UserController@index')->name('admin.user.index');
	Route::get('/users/create', 'UserController@create')->name('admin.user.create');
	Route::post('/users/store', 'UserController@store')->name('admin.user.store');
	Route::get('/admin_access', 'HomeController@index')->name('home');
});
Auth::routes();
/**
 * Protected routes for all
 */
Route::group([
	'middleware'=>[
		'auth'
	]
],function(){
	Route::get('/home', 'HomeController@index')->name('home');
});
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $data = Book::where('name','LIKE','%'.$q.'%')->orWhere('auth','LIKE','%'.$q.'%')->get();
    if(count($data) > 0)
        return view('frontend.search')->withDetails($data)->withQuery ( $q );
    else return view ('frontend.search')->withMessage('No Details found. Try to search again !');
});

// Route::get('/x', function (){ //frontend.search
// 	$user = Auth::user();
// 	$category = Category::find(1);
// 	$user->notify(new NewNotification(User::findOrFail(1),$category->id));
// });
