<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::resource('posts', 'PostsController');


Route::get('/', 'PostsController@index');

///////
Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
    	$data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }
});
///////
Route::get('/resume', function()
{
	return View::make('resume');
});

////////////

Route::get('/portfolio', function()
{
	return View::make('portfolio');
});

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

//creating posts


//testing blog posts
// Route::get('orm-test', function ()
// {
//     $post1 = new Post();
// $post1->title = 'Eloquent is awesome!';
// $post1->body  = 'It is super easy to create a new post.';
// $post1->save();

// $post2 = new Post();
// $post2->title = 'Post number two';
// $post2->body  = 'The body for post number two.';
// $post2->save();
// });


	
	