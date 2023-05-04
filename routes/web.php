<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tarefa;

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

Route::post('/adicionarTarefa', function (Request $request) {
    Tarefa::create([
        'tarefa' => $request->nome_tarefa,
        'status' => $request->status_tarefa
    ]);
    echo"Tarefa criada com sucesso";
});

Route::get('/exibirTarefa/{id_tarefa}', function ($id_tarefa) {
        
    $exibir = Tarefa::findOrfail($id_tarefa);
    echo $exibir->tarefa;
    echo"</br>";
    echo $exibir->status; 

});

Route::get('/editarTarefa/{id_tarefa}', function ($id_tarefa) {
        
    $exibir = Tarefa::findOrfail($id_tarefa);
    return view('editar', ['exibir'=>$exibir]);     

});

Route::put('/atualizarTarefa/{id_tarefa}', function (Request $informacoes, $id_tarefa) {
    $exibir = Tarefa::findOrfail($id_tarefa);
    $exibir->tarefa = $informacoes->nome_tarefa;
    $exibir->status = $informacoes->status_tarefa;    
    $exibir->save();
    echo"Tarefa atualizada com sucesso!";
});

Route::get('/excluirTarefa/{id_tarefa}', function ($id_tarefa) {
        
    $exibir = Tarefa::findOrfail($id_tarefa);
    $exibir->delete();
    echo"Tarefa Excluida com sucesso!";     

});
