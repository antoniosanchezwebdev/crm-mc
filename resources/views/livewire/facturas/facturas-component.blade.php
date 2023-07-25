<div>
    @mobile
        @if ($factura != null)
            @if ($tab == 'tab1')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="col-6 d-grid gap-2">
                            <button type="button" class="btn btn-warning btn-block"
                                wire:click="cambioTab('tab1')">Buscador</button>
                        </div>
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black  btn-block"
                                wire:click="cambioTab('tab2')">Ver/Editar
                                factura</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="me-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black  btn-block"
                                wire:click="cambioTab('tab3')">Añadir
                                factura</button>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                @livewire('facturas.index-component')
            @elseif ($tab == 'tab2')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black  btn-block"
                                wire:click="cambioTab('tab1')">Buscador</button>
                        </div>
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-warning btn-block"
                                wire:click="cambioTab('tab2')">Ver/Editar
                                factura</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="me-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black  btn-block"
                                wire:click="cambioTab('tab3')">Añadir
                                factura</button>
                        </div>

                    </div>
                    <br>
                </div>
                <br>


                @livewire('facturas.edit-component', ['identificador' => $factura], key('tab2'))

                <br>
            @elseif ($tab == 'tab3')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black  btn-block"
                                wire:click="cambioTab('tab1')">Buscador</button>
                        </div>
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black  btn-block"
                                wire:click="cambioTab('tab2')">Ver/Editar
                                factura</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="me-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-warning btn-block" wire:click="cambioTab('tab3')">Añadir
                                factura</button>
                        </div>

                    </div>
                    <br>
                </div>
                <br>

                @livewire('facturas.create-component', key('tab3'))
            @endif
        @else
            @if ($tab == 'tab1')
                <div style="border-bottom: 1px solid black !important;">
                    <div>
                        <div class="row">
                            <div class="col-6 d-grid gap-2">
                                <button type="button" class="btn btn-warning btn-block"
                                    wire:click="cambioTab('tab1')">Buscador</button>
                            </div>
                            <div class="ms-auto col-6 d-grid gap-2">
                                <button type="button" class="btn btn-outline-secondary btn-block" disabled
                                    wire:click="cambioTab('tab2')">Ver/Editar
                                    factura</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="me-auto col-6 d-grid gap-2">
                                <button type="button" class="btn btn-outline-warning text-black  btn-block"
                                    wire:click="cambioTab('tab3')">Añadir
                                    factura</button>
                            </div>

                        </div>
                        <br>
                    </div>
                    <br>

                    @livewire('facturas.index-component')
                @elseif ($tab == 'tab3')
                    <div style="border-bottom: 1px solid black !important;">
                        <div class="row">
                            <div class="col-6 d-grid gap-2">
                                <button type="button" class="btn btn-outline-warning text-black  btn-block"
                                    wire:click="cambioTab('tab1')">Buscador</button>
                            </div>
                            <div class="ms-auto col-6 d-grid gap-2">
                                <button type="button" class="btn btn-outline-secondary btn-block"
                                    wire:click="cambioTab('tab2')" disabled>Ver/Editar
                                    factura</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="me-auto col-6 d-grid gap-2">
                                <button type="button" class="btn btn-warning btn-block"
                                    wire:click="cambioTab('tab3')">Añadir
                                    factura</button>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>

                    @livewire('facturas.create-component', key('tab3'))

                    <br>
            @endif
        @endif
    @elsemobile
        @if ($factura != null)
            @if ($tab == 'tab1')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab1')">
                            <h3>Buscador</h3>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab2')">
                            <h5>Ver/Editar
                                factura</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab3')">
                            <h5>Añadir
                                factura</h5>
                        </button>
                    </li>
                </ul>
                <br>

                @livewire('facturas.index-component')
            @elseif ($tab == 'tab2')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab1')">
                            <h5>Buscador</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab2')">
                            <h5>Ver/Editar
                                factura</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab3')">
                            <h3>Añadir
                                factura</h3>
                        </button>
                    </li>
                </ul>
                <br>



                @livewire('facturas.edit-component', ['identificador' => $factura], key('tab2'))

                <br>
            @elseif ($tab == 'tab3')
                @livewire('facturas.create-component', key('tab3'))
            @endif
        @else
            @if ($tab == 'tab1')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab1')">
                            <h3>Buscador</h3>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link text-black" disabled wire:click.prevent="cambioTab('tab2')">
                            <h5>Ver/Editar
                                factura</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab3')">
                            <h5>Añadir
                                factura</h5>
                        </button>
                    </li>
                </ul>
                <br>

                @livewire('facturas.index-component')
            @elseif ($tab == 'tab3')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab1')">
                            <h5>Buscador</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link text-black" disabled wire:click.prevent="cambioTab('tab2')">
                            <h5>Ver/Editar
                                factura</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab3')">
                            <h3>Añadir
                                factura</h3>
                        </button>
                    </li>
                </ul>
                <br>

                @livewire('facturas.create-component', key('tab3'))

                <br>
            @endif
        @endif
    @endmobile
</div>
