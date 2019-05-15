@extends('layouts.app')

@section('content')

<div class="col-3 mb-3"> <img width = 500 src="{{ asset('images/sellCars').'/'.$found->car_photo }}"/></div>

    <p><b>Brand:</b> {{ $car->brand->name }} </p>
    <p><b>Model:</b> {{ $car->name }}</p>
    <p><b>Country of manufacture:</b> {{ $car->brand->country->name }} </p>
    <p><b>Power:</b> {{ $car->power }}</p>
    <p><b>Doors:</b> {{ $car->doors }}</p>
    <p><b>Type:</b> {{ $car->type->name }} </p>
    <p><b>Seats:</b> {{ $car->seats }}</p>
    <p><b>Price:</b> {{ $found->price }} EUR</p>
    <p><b>Color:</b> {{ $found->color->name }} </p>
    <p><b>Fuel:</b> {{ $found->fuel->name }} </p>
    <p><b>Year of manufacture:</b> {{ $found->year->year }}. </p>
    <p><b>Kilometers:</b> {{ $found->kilometers }}</p>
    <p><b>Registered to:</b> {{ $found->registered_to }}.</p>
    <p><b>First Health:</b> {{ $found->first_health ? 'Yes' : 'No' }}</p>
    <p><b>Air Condition:</b> {{ $found->air_condition ? 'Yes' : 'No' }}</p>
    <p><b>Triangle:</b> {{ $found->triangle ? 'Yes' : 'No' }}</p>
    <p><b>Extra wheels:</b> {{ $found->wheels_number }} </p>
    <p><b>Owner:</b> {{ $found->owner->first_name }} {{ $found->owner->last_name }} </p>
    <p><b>Address:</b> {{ $found->owner->address }} </p>
    <p><b>Mobile phone:</b> +{{ $found->owner->mobile_phone }} </p>
    <p><b>Home phone:</b> +{{ $found->owner->home_phone }} </p>
    <p><b>Email:</b> {{ $found->owner->email }} </p>
    <p><b>Created at:</b> {{ $found->created_at->diffForHumans() }}</p>
    <p><br>


@endsection
