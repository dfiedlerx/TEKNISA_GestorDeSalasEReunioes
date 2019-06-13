<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Rotas de retorno e salvamento de dados

Route::post('/getAgendamento', 'Agendamento\AgendamentoController@get');
Route::post('/editAgendamento', 'Agendamento\AgendamentoController@edit');
Route::post('/saveAgendamento', 'Agendamento\AgendamentoController@save');
Route::post('/deleteAgendamento', 'Agendamento\AgendamentoController@remove');


Route::post('/getColaborador', 'Colaborador\ColaboradorController@get');
Route::post('/editColaborador', 'Colaborador\ColaboradorController@edit');
Route::post('/saveColaborador', 'Colaborador\ColaboradoroController@save');
Route::post('/deleteColaborador', 'Colaborador\ColaboradorController@remove');

Route::post('/getSala', 'Sala\SalaController@get');
Route::post('/editSala', 'Sala\SalaController@edit');
Route::post('/saveSala', 'Sala\SalaController@save');
Route::post('/deleteSala', 'Sala\SalaController@remove');