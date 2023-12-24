{{-- @extends("Layouts.app")
@section("content") --}}

<style>
  .ml{
    margin-left: 201px
  }
  .mtop{
    margin-top: 127px;
  }
  .fs{
    font-size: 25px;
  }

 .mls{
  margin-left: 185px;
 }
 .mlss{
  margin-left: 10px;
 }
 .mlsss{
  margin-left: 118px;
 }
 .mr{
  margin-right: 20px;
 }
 .pa{
  padding: 6px;
 }
 .pa2{
  padding: 10px;
 }
 
</style>

<div class="card container-fluid p-5">
  <div class="w-75 ">
  <ul class="row ">
    <li class="col-4  mls fw-bold">Bus Operator <img src="{{asset("busTravel/images/down.png")}}" alt="" class="col-lg-1 pa"></li>
    <li class="col mlss fw-bold"><span>Dip.Time <img src="{{asset("busTravel/images/down.png")}}" alt="" class="col-lg-1 "></span></li>
    <li class="col ms-4 fw-bold"><span>Arr.Time <img src="{{asset("busTravel/images/down.png")}}" alt="" class="col-lg-1 "></span></li>
    <li class="col fw-bold me-3"><span>SeatsAbaiable </span></li>
    <li class="col "><span></span></li>
  </ul>
</div>

<div class="card w-75 mls mt-3">
  
<div class="row ">
  <div class="col-10 p-3">
        <ul class="row">
          
          <li class="col-5">
            
            
            <ul class="">

              <li><h4 class="text-success">Royal Coach</h4></li>
              <li class="mt-3 list-item ">12, Ashok leyland, AC</li>
              <li class="mt-3 list-item"><span class="text-uppercase fw-bolder ">Route :</span> Dhaka (Nabinagar) - Dhaka (Savar)</li>
              <li class="mt-3 list-item">Dhaka - Chittagong - Cox's bazar</li>
              <li class="mt-3 list-item"><span class="text-uppercase fw-bolder">Starting Point :</span> Dhaka</li>
              <li class="mt-3 list-item"><span class="text-uppercase fw-bolder">Ending Point :</span> Coxs bazar</li>
            </ul>
          </li>
          <li class="col-2">06:30 PM</li>
          <li class="col-2">05:30 AM</li>
          <li class="col-2 text-success fw-bold">28</li>
        </ul>
  </div>
<div class="col-2 ">
  <div class="mt-2">
    <ul>
      <li><h3>Taka</h3></li>
      <li class="fs  text-success">৳ 1800</li>
    </ul>
  </div>
  <!-- Button trigger modal -->
  <div class="mtop ms-4">
<button type="button mt-5 m" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    View Seats
  </button>
</div>

</div>
  
  <!-- Modal -->
  <div class="modal fade me-3" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success fw-bold" id="exampleModalLabel">Choose your seat(s)</h5>
          <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="row ">
          <div class="mt-2 card col-8 p-2  ">
            <div class="row ">
              <div class=" col-lg-2 ml "><img  src="{{asset("busTravel/images/Bussteering.png")}}"class="img-fluid " alt=""></div>
  
            </div>
         
                <div class="row ms-5 mt-2">
                  
                        <div class="form-check col-1 ">
                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              A1
                            </label>
                          </div>
                          <div class="form-check col-1 ms-1">
                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                              A2
                            </label>
                          </div>
                          <div class="form-check col-1 ms-5">
                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                              A3
                            </label>
                          </div>
                          <div class="form-check col-1 ms-2">
                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                              A4
                            </label>
                          </div>
                    </div>
                
                  <div class="row ms-5">
                          <div class="form-check col-1">
                              <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                B1
                              </label>
                            </div>
                            <div class="form-check col-1 ms-1">
                              <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                              <label class="form-check-label" for="exampleRadios2">
                                B2
                              </label>
                            </div>
                            <div class="form-check col-1 ms-5">
                              <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                              <label class="form-check-label" for="exampleRadios2">
                                B3
                              </label>
                            </div>
                            <div class="form-check col-1 ms-2">
                              <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                              <label class="form-check-label" for="exampleRadios2">
                                B4
                              </label>
                            </div>
                      </div>
                
                  
                    <div class="row ms-5">
                            <div class="form-check col-1">
                                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  C1
                                </label>
                              </div>
                              <div class="form-check col-1 ms-1">
                                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                  C2
                                </label>
                              </div>
                              <div class="form-check col-1 ms-5">
                                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                  C3
                                </label>
                              </div>
                              <div class="form-check col-1 ms-2">
                                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                  C4
                                </label>
                              </div>
                        </div>
                  
                    
                      <div class="row ms-5">
                              <div class="form-check col-1">
                                  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                  <label class="form-check-label" for="exampleRadios1">
                                    D1
                                  </label>
                                </div>
                                <div class="form-check col-1 ms-1">
                                  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                  <label class="form-check-label" for="exampleRadios2">
                                    D2
                                  </label>
                                </div>
                                <div class="form-check col-1 ms-5">
                                  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                  <label class="form-check-label" for="exampleRadios2">
                                    D3
                                  </label>
                                </div>
                                <div class="form-check col-1 ms-2">
                                  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                  <label class="form-check-label" for="exampleRadios2">
                                    D4
                                  </label>
                                </div>
                          </div>
                     
                     
                        <div class="row ms-5">
                                <div class="form-check col-1">
                                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      E1
                                    </label>
                                  </div>
                                  <div class="form-check col-1 ms-1">
                                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      E2
                                    </label>
                                  </div>
                                  <div class="form-check col-1 ms-5">
                                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      E3
                                    </label>
                                  </div>
                                  <div class="form-check col-1 ms-2">
                                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      E4
                                    </label>
                                  </div>
                            </div>
                        
                       
                          <div class="row ms-5">
                                  <div class="form-check col-1">
                                      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        F1
                                      </label>
                                    </div>
                                    <div class="form-check col-1 ms-1">
                                      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                      <label class="form-check-label" for="exampleRadios2">
                                        F2
                                      </label>
                                    </div>
                                    <div class="form-check col-1 ms-5">
                                      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                      <label class="form-check-label" for="exampleRadios2">
                                        F3
                                      </label>
                                    </div>
                                    <div class="form-check col-1 ms-2">
                                      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                      <label class="form-check-label" for="exampleRadios2">
                                        F4
                                      </label>
                                    </div>
                              </div>
                         
                         
                            <div class="row ms-5">
                                    <div class="form-check col-1">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          G1
                                        </label>
                                      </div>
                                      <div class="form-check col-1 ms-1">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                          G2
                                        </label>
                                      </div>
                                      <div class="form-check col-1 ms-5">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                          G3
                                        </label>
                                      </div>
                                      <div class="form-check col-1 ms-2">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                          G4
                                        </label>
                                      </div>
                                </div>
                           
                            
                              <div class="row ms-5">
                                      <div class="form-check col-1">
                                          <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                          <label class="form-check-label" for="exampleRadios1">
                                            H1
                                          </label>
                                        </div>
                                        <div class="form-check col-1 ms-1">
                                          <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                          <label class="form-check-label" for="exampleRadios2">
                                            H2
                                          </label>
                                        </div>
                                        <div class="form-check col-1 ms-5">
                                          <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                          <label class="form-check-label" for="exampleRadios2">
                                            H3
                                          </label>
                                        </div>
                                        <div class="form-check col-1 ms-2">
                                          <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                          <label class="form-check-label" for="exampleRadios2">
                                            H4
                                          </label>
                                        </div>
                                  </div>
                            
                              
                                <div class="row ms-5">
                                        <div class="form-check col-1">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              I1
                                            </label>
                                          </div>
                                          <div class="form-check col-1 ms-1">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                              I2
                                            </label>
                                          </div>
                                          <div class="form-check col-1 ms-5">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                              I3
                                            </label>
                                          </div>
                                          <div class="form-check col-1 ms-2">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                              I4
                                            </label>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                    
                            </div>
                            <div class="modal-footer">
                             
                              <button type="button" class="btn btn-success">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- end Button --}}
                    </div>

                      {{-- end row --}}
              </div>

                      {{-- end Container --}}
                </div>  

                

{{-- @endsection --}}