<?php

use app\Post;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
//    return view('welcome');
    return view('welcome');
});


// Route::get('/about', function () {
//     //    return view('welcome');
//         return "hi It is njn here";
//     });

// Route::get('/contact', function () {
// //    return view('welcome');
//     return "hi here is my email njnkhanal02@gmail.com";
// });


// Route::get('/work', function () {
// //    return view('welcome');
//     return "web development, graphics desigining";
// });

// Route::get('/post/{id}/{name}', function ($id, $name){

//     return "this is a id ".$id . " " . $name;

// });

// Route::get('/admin/home/sect3/out', array( 'as' => 'admin.home' , function () {

//     $url = route('admin.home');

//     return "the url of this page is " . $url;
    
// }));

// Route::get('/post/{id','PostsController@index');

// route::resource('posts','PostsController');


    // Route::get('/contact', 'PostsController@contact');


    // Route::get('/post/{id}/{name}/{address}', 'PostsController@myPost');



    /*
|--------------------------------------------------------------------------
| Database Works
|--------------------------------------------------------------------------

*/

    // Route::get('/insert',function() {

    //     DB::insert('insert into posts (title, description, user) values (?, ?, ?)', ['laravel','i am learning laravel class right now ','Njn khanal']);

    // });

    // route::get('/read',function() {
    //     $result = DB::select('select * from posts where id = ?', [1]);


    //     return var_dump($result);

    //     // foreach( $result as $post) {
    //     //     return $post->title;
    //     // }
    // });

    // Route::get('/update',function() {

    //     $title = "updated title";
    //     $date = getdate();
    //     $update = DB::update('update posts set title = $title AND updated_at = $date where id = ?', [1]); 

    // });

    // Route::get('/delete',function () {
    //     $deleted = DB::delete('delete from posts where id = ?', [1]);
    //     return $deleted;
    // });



    // Route::get('/find',function(){
    //     $posts = Post::all();
    //     foreach($posts as $pst){
    //         return $pst->title;
    //     }
    // });





    // Route::get('/basicinsert', function() {
    //     $post = new post;
    //     $post->title = "php artisan";
    //     $post->description = "thsi is use to do every operations of artisan";
    //     $post->user = "njn khanal";

    //     $post->save();
    // });

?>