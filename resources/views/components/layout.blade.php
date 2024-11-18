<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href= {{ asset('css/app.css') }}>
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link rel="icon" href="{{ asset('imagem/logo/logomenor.svg')}}"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>{{$title}}</title>
</head>
<body class="">
<header>
  <nav class="navbar navbar-expand-lg border border-primary bg-light">
    <a class="pl-4 pr-4" href="{{ route('index') }}">
      <img src="{{ asset('imagem/logo/logomenor.svg') }}" alt="Logo menor">
    </a>
    <button class="navbar-toggler bg-transparent" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"  onclick="menuShow()">
      <span class="navbar-toggler-icon icone-azul"> <img class="icon" src="{{ asset('imagem/icon/Icon.svg')}}"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle menu-nav-item" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Produtos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('produtos') }}">Cadastrar</a>
            <a class="dropdown-item" href="{{ route('buscarproduto') }}">Buscar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle menu-nav-item" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Fornecedor
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('cadastrarfornecedor') }}">Cadastrar</a>
            <a class="dropdown-item" href="{{ route('buscarFornecedor') }}">Buscar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle menu-nav-item" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Cliente
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('cadastrarcliente') }}">Cadastrar</a>
            <a class="dropdown-item" href="{{ route('buscarcliente') }}">Buscar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle menu-nav-item" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Vendas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('vendas') }}">Vender</a>
            <a class="dropdown-item" href="{{ route('buscarVenda') }}">Buscar</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a href="{{ route('vendas') }}"><img src="{{ asset('imagem/icon/loja.svg') }}" alt="icon"></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<main>
  {{$slot}}
</main>
<footer class="mt-2">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 Aqua Limpo. Todos os direitos reservados.</p>
      </div>
      <div class="col-md-6 font-weight-light">
        <p>Contate-nos: contato@aqualimpo.com</p>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('js/menu.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('js/pesquisa.js') }}"></script>
  <script src="{{ asset('js/mascaras.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script></footer>
  @stack('js')
</body>
</html>
