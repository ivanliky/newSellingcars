@extends('layouts.template')


@section('content')

@include('includes.dynamicDropdown')


<h1>Insert new informations</h1>



    <form action="{{ route('admin.store') }}" method="POST">

         @csrf

        <label for="model">Brand:</label>

        <select name="model" id="model">

            @foreach ($Allbrands as $brand)

            <option value="{{ $brand->id }}">{{ $brand->name }}</option>

            @endforeach

        </select><br>

        <label for="brand">Model:</label>

            <input type="text" id="model" name="model"><br>


        <label for="brand">Type:</label>

            <select name="type" id="type">

                @foreach ($types as $type)

                <option value="{{ $type->id }}">{{ $type->name }}</option>

                @endforeach

            </select><br>

        <label for="brand">Doors:</label>

            <input type="number" id="doors" name="doors"><br>

        <label for="brand">Seats:</label><br>

            <input type="number" id="seats" name="seats"><br><br>

        <input type="submit" value="Insert"><br><br>

        </form>

        <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <h2>Insert registrations</h2>


        <label for="brand">Select Brand:</label>
        <select name="brand" class="form-control"  style="width:250px" >
            <option value="">--- Select Brand ---</option>
            @foreach ($brands as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>


    <label for="model">Model:</label>

        <label for="car">Select Model:</label>
        <select name="car" class="form-control"style="width:250px">
        <option>--Model--</option>
        </select>


        <label for="brand">Type:</label>

             <select name="type" id="type">

              @foreach ($types as $type)

                <option value="{{ $type->id }}">{{ $type->name }}</option>

              @endforeach

         </select><br>

        <label for="brand">Price:</label>

            <input type="number" id="price" name="price"><br>

        <label for="brand">Color:</label>

            <input type="text" id="color" name="color"><br>

        <label for="fuel">Fuel:</label>

        <select name="fuel_id" id="fuel">

            @foreach ($fuels as $fuel)

            <option value="{{ $fuel->id }}">{{ $fuel->name }}</option>

            @endforeach

        </select><br>

        <label for="brand">Power:</label>

            <input type="number" id="power" name="power"><br>

        <label for="brand">Year of manufacture:</label>

        <select name="year_id" class="form-control" style="width:250px">

            @foreach ($years as $year)
                  <option value="{{ $year->id }}">{{ $year->year }}</option>
            @endforeach
        </select><br>

        <label for="kilometers">Kullometers:</label>

            <input type="number" id="kilometers" name="kilometers"><br>

        <label for="photo">Photo:</label>

            <input type="file" id="photo" name="car_photo"><br>

        <label for="registered">Registered to:</label>

        <select name="registered_to" class="form-control" style="width:250px">

            @foreach ($years as $year)
                  <option value="{{ $year->year }}">{{ $year->year }}</option>
            @endforeach
        </select><br>

        <label for="brand">First health:</label>

            <input type="checkbox" value='1' id="health" name="first_health"><br>

        <label for="brand">Air Condition:</label>

            <input type="checkbox" value='1' id="air" name="air_condition"><br>

        <label for="brand">Triangle:</label>

        <input type="checkbox" value="1" id="triangle" name="triangle"><br>

        <label for="brand">Extra wheels:</label>

            <input type="number" id="e_wheels" name="wheels_number"><br>

        <label for="brand">Owner First name:</label>

            <input type="text" id="o_fname" name="first_name"><br>

        <label for="brand">Owner Last name:</label>

            <input type="text" id="o_lname" name="last_name"><br>

        <label for="brand">Mobile phone:</label>

            <input type="number" id="m_phone" name="mobile_phone"><br>

        <label for="brand">Home phone:</label>

            <input type="number" id="h_phone" name="home_phone"><br>

        <label for="brand">Address:</label>

            <input type="text" id="address" name="address"><br>

        <label for="brand">Email:</label>

            <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Insert">

        </form>


@endsection


