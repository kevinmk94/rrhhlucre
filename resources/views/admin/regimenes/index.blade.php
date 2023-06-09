        @php
            $current = ($regimenes->currentPage() *10) -9;
            $i = $current;
        @endphp
        @foreach($regimenes as $key => $regimen)
        {{ $regimen->nombre_regimen }}                    
        @endforeach
        {{ $regimenes->links() }}