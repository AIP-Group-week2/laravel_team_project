
<?php
Auth::routes();
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

Route::get('submitmovie', 'HomeController@formValidation');
Route::post('submitmovie', 'HomeController@formValidationPost');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
	return view('about');

});

Route::get('/week4', function(){
    return view('week4');

});

Route::get('/movie_guest', function(){
    return view('movie_guest');

});
/*Route::get('{wrongPage}', function($wrongPage){
	return '<h2><b>Error: </b><br/>The page: '.$wrongPage.' you visit doesnot exist..</h2>';

});
*/
Route::get('submitmovie',function(){
  return View::make('submitmovie');

});

Route::post('movieresult',function()
{
    $movietitle = Input::get('movietitle');
    $movietype = Input::get('type');
    $moviecomment = Input::get('comment');
    $movieduration = Input::get('duration');
    $moviedate = Input::get('date');
//passing data in a row.
    return View::make('movieresult')->with('movietitle',$movietitle)->with('movietype',$movietype)
        ->with('moviecomment',$moviecomment)->with('movieduration',$movieduration)->with('moviedate',$moviedate);

});

?>




<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
