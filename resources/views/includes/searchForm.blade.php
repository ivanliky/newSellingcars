<div class="container">
    <h1>Cars</h1>

 <div class="row">
    <div class="form-group one column mr-5">
        <label for="brand">Select Brand:</label>
        <select name="brand" class="form-control"  style="width:250px" >
            <option value="">--- Select Brand ---</option>
            @foreach ($brands as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group one column mr-5">
        <label for="car">Select Model:</label>
        <select name="car" class="form-control"style="width:250px">
        <option>--Model--</option>
        </select>
    </div>

    <div class="form-group one column">
         <p class="m-0"><label for="price">Price to:</label></p>

         <input type="number" placeholder="&euro;">
    </div>

</div>

    <div class="row">
    <div class="form-group one column mr-5">
            <label for="from">Year From:</label>
            <select name="from" class="form-control" style="width:250px">

                @foreach ($years as $year)
                      <option value="{{ $year->id }}">{{ $year->year }}</option>
                @endforeach
            </select>
    </div>


    <div class="form-group one column mr-5">
            <label for="from">Year To:</label>
            <select name="to" class="form-control" style="width:250px">
                @foreach ($years as $year)
                      <option value="{{ $year->id }}">{{ $year->year }}</option>
                 @endforeach
            </select>
    </div>



    <div class="form-group">
        <label for="fuel">Fuel:</label>
        <select name="fuel" class="form-control" style="width:250px">
            <option value="">--- Fuel ---</option>
            @foreach ($fuels as $fuel)
            <option value="{{ $fuel->id }}">{{ $fuel->name }}</option>
            @endforeach
 </select>

</div>
 </div>

 <div class="row">
    <div class="form-group mb-5">
            <label for="type">Type:</label>
            <select name="type" class="form-control" style="width:250px">
                <option value="">--- Select Type ---</option>
                @foreach ($types as $type)
                <option value="{{ $type->id }}"> {{ $type->name }}</option>
                @endforeach
     </select>

  </div>
</div>
</div>
