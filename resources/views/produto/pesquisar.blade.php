<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-2">Pesquisar de produtos</h1>
    @if(count($produtos) == 0)
        <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
    @else
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th class="text-left">Descrição</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Data de vencimento</th>
            </tr>
            @foreach ($produtos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td class="text-left">{{ $p->descricao }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td>{{ $p->valor }}</td>
                    <td>{{ $p->data_vencimento }}</td>
                </tr>
            @endforeach
        </table>
    @endif

</div>
</body>
</html>