@extends('layouts.app')

@section('content')

@include('includes.searchForm')

@include('includes.dynamicDropdown')

<h2 class="mb-4">Recomended</h2>

<div>

    {{ $sellCars->render() }}

</div>

<div class="row">

@each('includes.boxes', $sellCars, 'module', 'includes.empty-module')

{{-- @foreach ($sellCars as $sellCar)

@include('includes.boxes')

@endforeach --}}

</div>

<div>

    <h3>Popular models</h3>

    <div class="modelBox">

        <p>Audi A4</p>

    </div>

    <div class="modelBox">

        <p>Audi A4</p>

    </div>

    <div class="modelBox">

        <p>Audi A4</p>

    </div>

    <div class="modelBox">

        <p>Audi A4</p>

    </div>

</div>

@endsection




