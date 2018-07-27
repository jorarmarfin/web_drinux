@extends('templates.page')

@section('content')
{{-- Banner Interna --}}
@include('web.partials.banner-interna')

{{-- Seccion Secundaria --}}
@include('web.partials.seccion-secundaria')

{{-- body --}}
{!! $nodo->body !!}

{{-- Carrusel --}}
@include('web.partials.carrusel-interna')

{{-- solicita cotizacion --}}
@include('web.partials.solicita-cotizacion')

{{-- Clientes --}}
@include('web.partials.clientes-confian')
@endsection