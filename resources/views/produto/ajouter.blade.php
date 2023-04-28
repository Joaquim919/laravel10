<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">

                <h1>Adicionar um Produto</h1>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger"> {{ $error }} </li>
                    @endforeach
                </ul>

                <form action="/ajouter/tratamento" method="POST" class="form-group">
                    @csrf

                    <div class="form-group">
                      <label for="Nome">Nome</label>
                      <input type="text" class="form-control" id="Nome" name="nome">
                    </div>

                    <div class="form-group">
                        <label for="Preco">Preço</label>
                        <input type="float" class="form-control" id="Preco" name="preco">
                      </div>

                      <div class="form-group">
                        <label for="Quantidade" class="form-label">Quantidade</label>
                        <input type="float" class="form-control" id="Quantidade" name="quantidade">
                      </div>

                      <br>
                    <button type="submit" class="btn btn-primary">Adicionar este Produto</button>

                    <br> <br/>

                      <a href="/produto" class="btn btn-danger">Voltar a lista de Produtos</a>
                  </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
