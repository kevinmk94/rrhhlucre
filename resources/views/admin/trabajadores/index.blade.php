@php
            $current = ($trabajadores->currentPage() *10) -9;
            $i = $current;
        @endphp
        @foreach($trabajadores as $key => $trabajador)
        {{ $trabajador->cargos->nombre_cargo }}    
        {{ $trabajador->regimenes->nombre_regimen }}                    
        @endforeach
        {{ $trabajadores->links() }}