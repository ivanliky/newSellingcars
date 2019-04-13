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

    <h1>Cars</h1>
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
      </div>
  </body>
</html>

<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="brand"]').on('change',function(){
               var brandID = jQuery(this).val();
               if(brandID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/brands/' +brandID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="car"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="car"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="car"]').empty();
               }
            });
    });
    </script>




@endsection
