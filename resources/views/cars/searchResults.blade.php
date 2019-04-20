@extends('layouts.app')

@section('content')

@if ($search)

<div class="container">

<h2 class="mb-4">Found</h2>



@foreach ($search as $found)



        <div style="padding: 30px; border: 1px solid #000; margin-bottom: 15px;">

            <img width = 270 src="{{asset('images/sellCars').'/'.$found->photo}}"/>

        </div>

@endforeach


@else <h1>Not found anything</h1>




@endif

@endsection

{{-- @extends('layouts.app')

@if ($search)

<ul style="list-style-type: none; font-size: 30px; padding-right:40px">

@foreach ($search as $found)
    <div style="border: 1px solid #000; padding: 20px; width: 443px; margin: 0 auto; margin-top: 80px;">
    <li><b>Brand:</b> {{  $found->brand }}</li>
    <li><b>Model:</b> {{  $found->model }}</li>
    <li><b>Year: </b>{{  $found->year }}</li>
    <li><b>Fuel:</b> {{  $found->fuel }}</li>
    <li><b>Type:</b> {{  $found->type }}</li>
    <p><b>Photo:</b></p>
    <li><img height = 300 src="{{asset('images/sellCars').'/'.$found->photo}}"/>
    <li><b>Owner:</b> {{  $found->owner }}</li>
    <li><b>Mobile:</b> {{  $found->mobile }}</li>
    <li><b>Price:</b> {{  number_format($found->price, 3) }} &euro;</li>
    <li><b>Kilometers:</b> {{  $found->kilometers }}</li>
    <li><b>Registered to:</b> {{  $found->registration }}</li>
</div>
@endforeach

</ul>

@else <h1>Not found anything</h1>


@endif --}}

