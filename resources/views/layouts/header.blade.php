<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<style>
    /* Media Query para ordenadores con pantallas grandes */
    @media (min-width: 600px) {
        .img-fluid {
            max-height: 25% !important;
            max-width: 25% !important;
        }

        li {
            margin-right: 10px;
        }

    }

    /* Media Query para tablets y móviles */
    @media (max-width: 500px) {
        .img-fluid {
            max-height: 50% !important;
            max-width: 50% !important;
        }

        li {
            margin-bottom: 10px;
        }
    }

    body {
        background-color: #b8b596;
    }

    .btn-warning:hover,
    .btn-warning:active,
    .btn-warning:focus {
        color: #212529 !important;
    }
    .btn-outline-warning:hover,
    .btn-outline-warning:active,
    .btn-outline-warning:focus {
        color: #212529 !important;
    }
</style>

<nav class="navbar navbar-expand-lg shadow bg-dark">
    @mobile
        <div class="container-fluid">
            <div class="navbar-brand">
                <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="Logo">
                <button class="navbar-toggler float-end !important" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-around w-100 py-2">
                    <li class="nav-item mx-2">
                        @if (Request::is('admin/agenda'))
                            <a class="btn btn-md btn-warning d-block w-100 p-2" href="/admin/agenda">
                                <i class="fas fa-book"></i><br>
                                <strong>Agenda</strong>
                            </a>
                        @else
                            <a class="btn btn-md btn-outline-warning d-block w-100 p-2" href="/admin/agenda">
                                <i class="fas fa-book"></i><br>
                                <strong>Agenda</strong>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item mx-2">
                        @if (Request::is('admin/clients'))
                            <a class="btn btn-md btn-warning  d-block w-100 p-2" href="/admin/clients">
                                <i class="fas fa-book"></i><br>
                                <strong>Agenda</strong>
                            </a>
                        @else
                            <a class="btn btn-md btn-outline-warning   d-block w-100 p-2"
                                href="/admin/clients">
                                <i class="fas fa-book"></i><br>
                                <strong>Clientes</strong>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item mx-2">
                        @if (Request::is('admin/presupuestos'))
                            <a class="btn btn-md btn-warning  d-block w-100 p-2" href="/admin/presupuestos">
                                <i class="fas fa-book"></i><br>
                                <strong>Presupuestos</strong>
                            </a>
                        @else
                            <a class="btn btn-md btn-outline-warning   d-block w-100 p-2"
                                href="/admin/presupuestos">
                                <i class="fas fa-book"></i><br>
                                <strong>Presupuestos</strong>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item mx-2">
                        @if (Request::is('admin/productos'))
                            <a class="btn btn-md btn-warning  d-block w-100 p-2" href="/admin/productos">
                                <i class="fas fa-boxes-stacked"></i><br>
                                <strong>Inventario</strong>
                            </a>
                        @else
                            <a class="btn btn-md btn-outline-warning   d-block w-100 p-2"
                                href="/admin/productos">
                                <i class="fas fa-boxes-stacked"></i><br>
                                <strong>Inventario</strong>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item mx-2">
                        @if (Request::is('admin/orden-trabajo'))
                            <a class="btn btn-md btn-warning  d-block w-100 p-2" href="/admin/orden-trabajo">
                                <i class="fas fa-wrench"></i><br>
                                <strong>Tareas</strong>
                            </a>
                        @else
                            <a class="btn btn-md btn-outline-warning   d-block w-100 p-2"
                                href="/admin/orden-trabajo">
                                <i class="fas fa-wrench"></i><br>
                                <strong>Tareas</strong>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item mx-2">
                        @if (Request::is('admin/facturas'))
                            <a class="btn btn-md btn-warning  d-block w-100 p-2" href="/admin/facturas">
                                <i class="fas fa-wallet"></i><br>
                                <strong>Facturación</strong>
                            </a>
                        @else
                            <a class="btn btn-md btn-outline-warning   d-block w-100 p-2"
                                href="/admin/facturas">
                                <i class="fas fa-wallet"></i><br>
                                <strong>Facturación</strong>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item mx-2">
                        @if (Request::is('admin/caja'))
                            <a class="btn btn-md btn-warning  d-block w-100 p-2" href="/admin/caja">
                                <i class="fas fa-cart-shopping"></i><br>
                                <strong>Caja</strong>
                            </a>
                        @else
                            <a class="btn btn-md btn-outline-warning   d-block w-100 p-2"
                                href="/admin/caja">
                                <i class="fas fa-cart-shopping"></i><br>
                                <strong>Caja</strong>
                            </a>
                        @endif

                    </li>
                </ul>
            </div>
        </div>
    @elsemobile
        <div class="container-fluid col-12">
            <div class="navbar-brand col order-1">
                <a href="/../home/"><img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="Logo"></a>
            </div>
            <div class="col-2 order-2">
            </div>
            <ul class="navbar-nav me-auto mb-0 mb-lg-0 col order-3">
                <li class="nav-item">
                    @if (Request::is('admin/agenda'))
                        <a class="btn btn-warning " href="/admin/agenda">
                            <i class="fas fa-book"></i><br>
                            <strong>Agenda</strong>
                        </a>
                    @else
                        <a class="btn btn-outline-warning " href="/admin/agenda">
                            <i class="fas fa-book"></i><br>
                            <strong>Agenda</strong>
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Request::is('admin/clients'))
                        <a class="btn btn-warning " href="/admin/clients">
                            <i class="fas fa-user"></i><br>
                            <strong>Clientes</strong>
                        </a>
                    @else
                        <a class="btn btn-outline-warning " href="/admin/clients">
                            <i class="fas fa-user"></i><br>
                            <strong>Clientes</strong>
                        </a>
                    @endif

                </li>
                <li class="nav-item">
                    @if (Request::is('admin/presupuestos'))
                        <a class="btn btn-warning " href="/admin/presupuestos">
                            <i class="fas fa-file-contract"></i><br>
                            <strong>Presupuestos</strong>
                        </a>
                    @else
                        <a class="btn btn-outline-warning " href="/admin/presupuestos">
                            <i class="fas fa-file-contract"></i><br>
                            <strong>Presupuestos</strong>
                        </a>
                    @endif

                </li>
                <li class="nav-item">
                    @if (Request::is('admin/productos'))
                        <a class="btn btn-warning " href="/admin/productos">
                            <i class="fas fa-boxes-stacked"></i><br>
                            <strong>Inventario</strong>
                        </a>
                    @else
                        <a class="btn btn-outline-warning " href="/admin/productos">
                            <i class="fas fa-boxes-stacked"></i><br>
                            <strong>Inventario</strong>
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Request::is('admin/orden-trabajo'))
                        <a class="btn btn-warning " href="/admin/orden-trabajo">
                            <i class="fas fa-wrench"></i><br>
                            <strong>Tareas</strong>
                        </a>
                    @else
                        <a class="btn btn-outline-warning " href="/admin/orden-trabajo">
                            <i class="fas fa-wrench"></i><br>
                            <strong>Tareas</strong>
                        </a>
                    @endif

                </li>
                <li class="nav-item">
                    @if (Request::is('admin/facturas'))
                        <a class="btn btn-warning " href="/admin/facturas">
                            <i class="fas fa-wallet"></i><br>
                            <strong>Facturación</strong>
                        </a>
                    @else
                        <a class="btn btn-outline-warning " href="/admin/facturas">
                            <i class="fas fa-wallet"></i><br>
                            <strong>Facturación</strong>
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Request::is('admin/caja'))
                        <a class="btn btn-warning " href="/admin/caja">
                            <i class="fas fa-cart-shopping"></i><br>
                            <strong>Caja</strong>
                        </a>
                    @else
                        <a class="btn btn-outline-warning " href="/admin/caja">
                            <i class="fas fa-cart-shopping"></i><br>
                            <strong>Caja</strong>
                        </a>
                    @endif
                </li>
            </ul>
        </div>
        </div>
    @endmobile
</nav>
