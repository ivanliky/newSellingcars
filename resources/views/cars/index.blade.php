@extends('layouts.app')


@section('content')



<!-- dropdown.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Dependent Dropdown  Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  </head>
  <body>

    <h1>Search</h1>
    <div class="container">
            <div class="form-group">
                <label for="brand">Select Brand:</label>
                <select name="brand" class="form-control" style="width:250px">
                    <option value="">--- Select Brand ---</option>
                    @foreach ($brands as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="car">Select Model:</label>
                <select name="car" class="form-control"style="width:250px">
                <option>--Model--</option>
                </select>
            </div>
            <div class="form-group">
                    <label for="from">Select Year:</label>
                    <select name="from" class="form-control" style="width:250px">
                        <option value="">--- From ---</option>
                        @for ($i = 2020; $i > 1929; $i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
            </div>
            <div class="form-group">

                    <select name="to" class="form-control" style="width:250px">
                        <option value="to">--- To ---</option>
                        @for ($i = 2020; $i > 1929; $i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
            </div>

            <div class="form-group">
                    <label for="type">Type:</label>
                    <select name="type" class="form-control" style="width:250px">
                        <option value="">--- Select Type ---</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}"> {{ $type->name }}</option>
                        @endforeach

             </select>
            </div>
            <div class="form-group">
                    <label for="price">Price to:</label>

                    <input type="number" placeholder="&euro;">
            </div>


            <div class="form-group">
                    <label for="fuel">Fuel:</label>
                    <select name="fuel" class="form-control" style="width:250px">
                        <option value="">--- Fuel ---</option>

                        <option value=""></option>


             </select>
            </div>
      </div>
  </body>
</html>

@include('includes.dynamicDropdown')

@endsection
