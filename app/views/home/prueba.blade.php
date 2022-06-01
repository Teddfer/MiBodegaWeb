@extends('layouts.template')

@section('title', 'Inicio')

@section('content')
    @component('layouts.components.alert')
        @slot('title', 'Cualquier cosa')
        @slot('color', 'warning')
        Esta es una alerta naranja
    @endcomponent

    {{--@include('layouts.partials.slider')--}}
@endsection