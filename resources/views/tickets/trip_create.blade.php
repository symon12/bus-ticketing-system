@extends("Layouts.app")
@section("content")
<div class="container custom-container p-5">
<div class="row justify-content-center ">
<form method="POST" method="{{route("store_trip")}}"   class=" col-lg-4">
  @csrf
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input name="from_location" type="text" id="form1Example1" class="form-control" />
      <label  class="form-label" for="form1Example1">From_location</label>

      @error("from_location")
       <p class="text-danger">{{$message}}</p>
                                
       @enderror
    </div>
  
    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input name="to_location" type="text" id="form1Example2" class="form-control" />
      <label class="form-label" for="form1Example2">to_location</label>
      @error("to_location")
       <p class="text-danger">{{$message}}</p>
                                
       @enderror
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <input name="trip_date" type="date" id="form1Example2" class="form-control" />
        <label  class="form-label" for="form1Example2">trip_date</label>
        @error("trip_date")
       <p class="text-danger">{{$message}}</p>
                                
       @enderror
      </div>
  
    <!-- Submit button -->
    <button  type="submit" class="btn btn-primary btn-block ">Submit</button>
  </form>
</div>
</div>



 @endsection 