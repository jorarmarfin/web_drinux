@extends('templates.page')

@section('content')
{{-- Banner Interna --}}
@include('web.partials.banner-interna')

{{-- Seccion Secundaria --}}
@include('web.partials.seccion-secundaria')


{{-- body --}}
{!! $nodo->body !!}

{{-- solicita cotizacion --}}
@include('web.partials.solicita-cotizacion')


{{-- Clientes --}}
@endsection