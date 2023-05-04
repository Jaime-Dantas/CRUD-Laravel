<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>
<body>

    <form action="/atualizarTarefa/{{$exibir->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Tarefa:</label>
        <input type="text" name="nome_tarefa" placeholder="Entre com o nome da tarefa" value="{{$exibir->tarefa}}">

        <label for="">Status:</label>
        <input type="text" name="status_tarefa" placeholder="Digite o status atual da tarefa" value="{{$exibir->status}}">

        <button>Atualizar</button>

    </form>    

</body>
</html>