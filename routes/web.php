<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/execute-payment','PaymentController@execute');
Route::post('/create-payment','PaymentController@create')->name('create-payment');

Route::get('plan/create','SubscriptionsController@createPlan');
Route::get('plan/list','SubscriptionsController@listPlan');
Route::get('plan/{id}','SubscriptionsController@planDetails');
Route::get('plan/{id}/activate','SubscriptionsController@activatePlan');

Route::post('plan/{id}/agreement/create','SubscriptionsController@CreateAgreement')->name('create-agreement');
Route::get('execute-agreement/{success}','SubscriptionsController@executeAgreement');
