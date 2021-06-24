@include('layouts._includes.Header')
@include('layouts._includes.Menu')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                @yield('conteudo')

            </div>
        </div>
    </div>
</main>

@include('layouts._includes.Footer')
