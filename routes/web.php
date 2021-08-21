<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\PageController;

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
Route::get('halaman',[PageController::class,'index']);

Route::get('/many',function(){
    $user = User::create([
        'name' => 'hery',
        'email' => 'hery@gmail.com',
        'password' => bcrypt('12345')
    ]);

    // $user = User::findorFail(2);

    $user->posts()->create([
        'title' => ' isi title post ke-3',
        'body' => 'Hello world ke-3, ini adalah isi dari body'
    ]);

    return 'success';
});

Route::get('/add-category',function(){
    // $post = Post::find(2);

    // $post->categories()->create([
    //     'slug' => 'belajar_php',
    //     'category' => 'php'
    // ]);

    $user = User::create([
        'name' => 'azwir',
        'email' => 'azwir@gmail.com',
        'password' => bcrypt('25642'),
    ]);
    $user->posts()->create([
        'title' => 'post ketiga',
        'body' => 'Sampai ke kelas di matkul algoritma, pak dosen mencontohkan syntax bahasa c, diakhir kelas aku bertanya apakah akan memakai bahasa C kedepannya atau c++, dia menjawab tapi sedikit kesal sepertinya wkwk
        ',
    ])->categories()->create([
        'slug'=> 'belajar html',
        'category' => 'html'
    ]);


    return 'success';
});

