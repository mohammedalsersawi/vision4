<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\site3Controller;





 Route::prefix('site2')->name('sote2')->group(function(){
    Route::get('/', [Site2Controller::class , 'home'])->name('home');
    Route::get('/about', [Site2Controller::class , 'about'])->name('about');
    Route::get('/services', [Site2Controller::class , 'services'])->name('services');
    Route::get('/services/{name}', [Site2Controller::class , 'singel_services'])->name('singel_services');
    Route::get('/contacts', [Site2Controller::class , 'contacts'])->name('contacts');


   /*   Route::get('/about',function(){
        return 'site1 about';
      })->name('about');

      Route::get('/services',function(){
        return 'site1 services';
      })->name('services');


      Route::get('/contacts',function(){
        return 'site1 contacts';
      })->name('contacts');
*/

 });


Route::prefix('site3')->name('site3')->group(function(){
    Route::get('/',[site3Controller::class , 'index'])->name('index');
    Route::get('/about',[site3Controller::class , 'about'])->name('about');
    Route::get('/services',[site3Controller::class , 'services'])->name('services');
    Route::get('/contacts',[site3Controller::class , 'contacts'])->name('contacts');


});


Route::get('/',function(){
    return 'Hamoooo';
});










