<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
            placeholder="Digite algo..." aria-label="Search">
    </form>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                <span class="fe fe-grid fe-16"></span>
            </a>
        </li>

        <li class="nav-item dropdown">
  
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="fe fe-user fe-16"></span>
           {{--      <span class="avatar avatar-sm mt-2">

                     @php
                        $img = Auth::User()->profile_photo_path;
                    @endphp
                    @if (isset($img))
                        <img src="{{ url("storage/{$img}") }}" alt="..." class="avatar-img rounded-circle">
                    @endif 
                </span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                {{-- <a class="dropdown-item" href="{{ routE('admin.users.perfil', Auth::User()->id) }}">Perfil</a>
                <a class="dropdown-item" href="{{ route('admin.users.editar', Auth::user()->id) }}">Configurações</a> --}}
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Terminar a Sessão
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </ul>
</nav>

@if (null !== Auth::user())
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100  d-flex">
                <a class="navbar-brand mx-auto  flex-fill text-center" href="{{ url('') }}">
                    <img rel="icon" src="" style="width:50px; margin:auto" />

                </a>
            </div>


            <ul class="navbar-nav flex-fill w-100 mb-2">
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Painel</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ url('/home') }}">
                            <i class="fe fe-help-circle fe-16"></i>
                            <span class="ml-3 item-text">Painel</span>
                        </a>
                    </li>
                </ul>







                <li class="nav-item dropdown">
                    <a href="#horario" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-clock fe-16"></i>
                        <span class="ml-3 item-text"> Horário</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="horario">
                        @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ url('/horarios/criar') }}"><span
                                        class="ml-1 item-text">Cadastrar
                                        Horário</span></a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ url('/horarios') }}"><span class="ml-1 item-text">Listar
                                    Horários</span></a>
                        </li>
                    </ul>
                </li>
                {{-- @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                    <li class="nav-item dropdown">
                        <a href="#anoLectivo" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-calendar fe-16"></i>
                            <span class="ml-3 item-text"> Anos Lectivo</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="anoLectivo">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ url('/admin/anolectivo/cadastrar') }}"><span
                                        class="ml-1 item-text">Cadastrar</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ url('/admin/anolectivo') }}"><span
                                        class="ml-1 item-text">Listar</span></a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#Disciplinas" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-book-open fe-16"></i>
                            <span class="ml-3 item-text"> Disciplinas</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="Disciplinas">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ url('disciplinas/criar') }}"><span
                                        class="ml-1 item-text">Cadastrar</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ url('disciplinas') }}"><span
                                        class="ml-1 item-text">Listar</span></a>
                            </li>
                        </ul>
                    </li>


                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span> Logs de Actidade</span>
                    </p>

                    <li class="nav-item dropdown">
                        <a href="#logs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-database fe-16"></i>
                            <span class="ml-3 item-text"> Logs</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="logs">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ url('admin/logs/pesquisar') }}"><span
                                        class="ml-1 item-text">Lista
                                        de Logs</span></a>
                            </li>


                        </ul>
                    </li>
                @endif --}}
            </ul>
     
        </nav>
    </aside>

@endif



