@extends('layouts.app')

@section('content')

@if ($search)

<div class="container">

<h2 class="mb-4">Found cars</h2>



@foreach ($search as $found)

 <div style="padding: 30px; border: 1px solid #000; margin-bottom: 15px; overflow:hidden;">

     <div class="imageS" style="float:left;"><img width = 270 src="{{asset('images/sellCars').'/'.$found->photo}}"/>

    </div>

     <div class="info" style="float:left; margin-left: 20px;">


         <p>{{ $found->year }}. | {{ $found->kilometers }}km | {{ $found->fuel }} | 6000 cm3 , {{ $found->type }} , {{ $found->power }},</p>
         <p>Automatski menjac , Air Condition: {{ $found->air_condition ? 'yes' : 'no' }} </p>
         <p>{{ $found->seats }} seats , {{ $found->doors }} doors</p>
         <p>Selling start  date: {{ $found->published }} </p>
         <p>Location: Serbia</p>

     </div>

     <div class="price" style="float:left;margin-left: 40px; margin-top: 85px;">

        <h2>{{ number_format($found->price, 3) }} &euro;</h2>

     </div>

     <h2><a href="{{ route('find.show', $found->car_id) }}">More</a></h2>

 </div>



@endforeach


@else <h1>Not found anything</h1>




@endif

@endsection



