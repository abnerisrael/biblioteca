<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('livros.index')}}">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Livro
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('livros.create')}}">Cadastrar</a>
                    <a class="dropdown-item" href="{{route('livros.index')}}">Ver Todos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cliente
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('clientes.create')}}">Cadastrar</a>
                    <a class="dropdown-item" href="{{route('clientes.index')}}">Ver Todos</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a role="button"
               href="https://github.com/abnerisrael/biblioteca/tree/develop"
               class="btn"
               data-toggle="tooltip"
               data-placement="left"
               title="Veja o Codigo no Github">
                <i class="fab fa-github fa-lg"></i>
            </a>
        </form>
    </div>
</nav>
