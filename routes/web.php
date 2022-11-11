<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\AkunController;
use\App\Http\Controllers\AccountController;



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

//Route::get('/halo', function () {
    // ini versi laely
   // echo "
    //<h1>Halo Cicih </h1>
    //";
    // ini versi dina dan salma
   // return 'Halo Cicih';
//});

// Route::get('/akun', function () {
//      return ('<h1>Media Online</h1>
//      <h3>Sosial Media Developer</h3>
//      <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
//      <h4>Benefit Join di Media Online</h4>
//      <ul>
//          <li>Mendapatkan motivasi dari sesama Developer</li>
//          <li>Sharing knowledge</li>
//          <li>Dibuat oleh calon web developer terbaik</li>
//      </ul>
//      <h4>Cara Bergabung ke media online</h4>
//      <ol>
//          <li>Mengunjunig website ini</li>
//          <li>Mendaftarkan di
//              <a href="form.html"> Form Sign Up </a></li>
//          <li>Selesai</li>
//      </ol>');
// // });
// Route::get('/akuncontroller', function () {
//     return ('<h1>Buat Account Baru</h1>
//     <h4>Sign Up Form</h4>
//     <form action="welocome.html" method="post">
//         <label for="first-name">First Name : </label>
//         <br>
//         <input type="text" name="first-name" id="first-name" class="name" placeholder="dadhag">
//         <br>
//         <label for="last-name">Last Name :</label>
//         <br>
//         <input type="text" name="last-name" id="last-name">
//         <br>
//         <label for="gender">Gender :</label>
//         <br>
//         <input type="radio" name="gender" id="">Male
//         <br> 
//         <input type="radio" name="gender" id="">Female
//         <br>
//         <label for="Nationatity">Nationality</label>
//         <br>
//         <select name="Nationatity" id="Nationatity">
//             <option value="wna">WNI</option>
//             <option value="wni">WNA</option>
//         </select>
//         <br>
//         <label for="language">Bahasa</label>
//         <br>
//         <input type="checkbox" name="language" id="">Bahasa Indonesia
//         <br>
//         <input type="checkbox" name="language" id="">English
//         <br>
//         <input type="checkbox" name="language" id="">Other
//         <br>
//         <label for="bio">Bio</label><br>
//         <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
//         <br>
//         <input type="submit" value="Sign Up">
//         ');
// });

Route::get('/akun', [AkunController::class, 'index']);
Route::get('/akun/create', [AkunController::class, 'create']);


Route::get('account', [AccountController::class, 'index'])->name('IndexAccount');
Route::get('/account/create', [AkunController::class, 'create'])->name('');
Route::get('/account/show', [AkunController::class, 'show']);

Route::get('/', [AccountController::class, 'index']);
Route::get('/table', [AccountController::class, 'table'])->name('table');
Route::get('/data', [AccountController::class, 'data'])->name('createAkun');