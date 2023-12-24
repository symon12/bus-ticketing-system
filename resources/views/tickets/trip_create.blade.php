@extends("Layouts.app")
@section("content")
<div class="container custom-container">
<div class="row justify-content-center ">
<form method="POST" method="{{route("store_trip")}}" class=" col-lg-4">
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input name="From_location" type="email" id="form1Example1" class="form-control" />
      <label  class="form-label" for="form1Example1">From_location</label>
    </div>
  
    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input name="to_location" type="password" id="form1Example2" class="form-control" />
      <label class="form-label" for="form1Example2">to_location</label>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <input name="trip_date" type="password" id="form1Example2" class="form-control" />
        <label  class="form-label" for="form1Example2">trip_date</label>
      </div>
     
  
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
      </div>
    </div>
  
    <!-- Submit button -->
    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block ">Submit</button>
  </form>
</div>
</div>



 @endsection 