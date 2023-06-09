        @php
            $current = ($cargos->currentPage() *10) -9;
            $i = $current;
        @endphp
    <div class="row listado-tours">
        @foreach($cargos as $key => $cargo)
                        <div class="d-flex align-items-center">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                <i class="icon-2x text-dark-50 flaticon-bus-stop"></i>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column mr-auto">
                                <!--begin: Title-->
                                <a href="#!" class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">{{ $cargo->nombre_cargo }}</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    
        @endforeach
        {{ $cargos->links() }}