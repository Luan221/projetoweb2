<?php
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
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/{id}/instituition', 'AdminController@editInstituitionView');
    Route::post('/update', 'AdminController@updateInstituition');
    Route::get('/{id}/editar', 'AdminController@editInstituitionView');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    //------------ ACCOUNT ----------------------
    Route::get('/account', 'AdminController@Account');
    Route::get('/account/{id}/editForm', 'AdminController@EditAccount');
    Route::post('/update/aluno', 'AdminController@updateAluno');
    Route::post('/account/create/aluno', 'AdminController@createAluno');
    Route::post('/account/delete', 'AdminController@DeleteAluno');

    //--------Professor--------------------------

    Route::get('/account/{id}/editFormProf', 'AdminController@EditAccountProf');
    Route::post('/update/prof', 'AdminController@updateProf');
    Route::post('/account/deleteProf', 'AdminController@DeleteProf');
    Route::post('/account/create/professor', 'AdminController@createProfessor');

    //--------Disciplina--------------------------
    Route::get('/disciplina', 'AdminController@Disciplina');
    Route::get('/disciplina/{id}/editForm', 'AdminController@EditDisciplina');
    Route::post('/create/disciplina', 'AdminController@createDisciplina');
    Route::post('/update/disciplina', 'AdminController@updateDisciplina');
    Route::post('/disciplina/delete', 'AdminController@DeleteDisciplina');

    //--------Evento--------------------------
    Route::get('/evento', 'AdminController@Eventos');
    Route::get('/evento/{id}/editForm', 'AdminController@EditEvento');
    Route::post('/create/evento', 'AdminController@createEvento');
    Route::post('/update/evento', 'AdminController@updateEvento');
    Route::post('/evento/delete', 'AdminController@DeleteEvento');

    //--------Projetos Extensão--------------------------
    Route::get('/projeto', 'AdminController@Projeto');
    Route::get('/projeto/{id}/editForm', 'AdminController@EditProjeto');
    Route::post('/create/projeto', 'AdminController@createProjeto');
    Route::post('/update/projeto', 'AdminController@updateProjeto');
    Route::post('/projeto/delete', 'AdminController@DeleteProjeto');




});

Route::prefix('prof')->group(function() {
    Route::get('/login', 'Auth\ProfLoginController@showLoginForm')->name('prof.login');
    Route::post('/login', 'Auth\ProfLoginController@login')->name('prof.login.submit');
    Route::get('/', 'ProfController@index')->name('prof.dashboard');
    Route::get('/{periodo}/listAlunos', 'ProfController@ListAlunos');
    Route::get('/{periodo}/{id}/newNotas', 'ProfController@Notas');
    Route::post('/newNota/aluno', 'ProfController@newNotas');

});
