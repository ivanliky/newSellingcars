@extends('layouts.app')

@section('content')

@include('includes.searchForm')

@include('includes.dynamicDropdown')

<h2 class="mb-4">Recomended</h2>

<div>

    {{ $sellCars->render() }}

</div>

<div class="row">

@foreach ($sellCars as $sellCar)

@include('includes.boxes')

@endforeach

</div>

@endsection




