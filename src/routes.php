<?php
Route::group(['middleware' => ['web','auth']], function() {
    Route::get('/crudgenerator',function(){
        return view('crud::index');
    });
    Route::post('/crud/insert',[\Vdes\Crud\CrudController::class,'insert'])->name('crud.insert');
});
