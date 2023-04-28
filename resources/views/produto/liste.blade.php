<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">

        <div class="row">

            <div class="col s12">
                <h1>Lista de Produtos</h1>
                    <hr>
                    <a href="/ajouter" class="btn btn-primary">Adicionar um Produto</a>
                    <hr>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1;
                            @endphp
                            @foreach($produto as $produto)
                            <tr>
                                <td>{{ $id }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->preco }}</td>
                                <td>{{ $produto->quantidade }}</td>
                                <td>
                                    <a href="/update-produto/{{ $produto->id }}" class="btn btn-info">Editar</a>
                                    <a href="/delete-produto/{{ $produto->id }}" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                            @php
                                $id += 1;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>



                    <!--NAO CONSEGUI FAZER A PAGINAÇAO , DEU ESSE ERRO "Call to undefined method App\Models\Produto::links() DESCULPEM." -->

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
