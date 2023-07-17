@extends('layouts.app2')
    @section('content')
        @php
                $current = ($cargos->currentPage() *10) -9;
                $i = $current;
            @endphp
            @foreach($cargos as $key => $cargo)
            {{ $cargo->nombre_cargo }}                    
            @endforeach
            {{ $cargos  ->links() }}
    @endsection