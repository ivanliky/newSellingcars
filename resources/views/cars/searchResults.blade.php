@extends('layouts.app')

@if ($search)

<ul style="list-style-type: none; font-size: 30px;">

@foreach ($search as $found)

    <li><b>Brand:</b> {{  $found->brand }}</li>
    <li><b>Model:</b> {{  $found->model }}</li>
    <li><b>Year: </b>{{  $found->year }}</li>
    <li><b>Fuel:</b> {{  $found->fuel }}</li>
    <li><b>Type:</b> {{  $found->type }}</li>
    <p>Photo:</p>
    <li><img height = 300 src="{{asset('images/sellCars').'/'.$found->photo}}"/>
    <li><b>Owner:</b> {{  $found->owner }}</li>
    <li><b>Mobile:</b> {{  $found->mobile }}</li>

@endforeach

</ul>

@else <h1>Not found anything</h1>


@endif

