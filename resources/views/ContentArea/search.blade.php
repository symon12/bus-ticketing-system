

{{-- !-- Search --> --}}

<div class="search">
		

    <!-- Search Contents -->
    
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="col fill_height">

                <!-- Search Tabs -->

                <div class="search_tabs_container">
                    <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        {{-- <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset("busTravel/images/suitcase.png")}} " alt=""><span>hotels</span></div>   --}}
                      <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset("busTravel/images/bus.png")}} " alt="">Bus</div>
                         {{-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset("busTravel/images/departure.png")}} " alt="">flights</div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset("busTravel/images/island.png")}} " alt="">trips</div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset("busTravel/images/cruise.png")}} " alt="">cruises</div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset("busTravel/images/diving.png")}} " alt="">activities</div>  --}}
                    </div>		 
                </div>

                <!-- Search Panel --> 

                <div class="search_panel active">
                   <form method="POST" action="" id="" class="search_panel_content d-flex flex-lg-row flex-column align-items-center align-items-start justify-content-lg-between justify-content-start">
                    
                        <div class="search_item">
                            <div>From</div>
                            <select name="from_location" id="adults_1" class="dropdown_item_select search_input">
                                <option><p><a href="">Dhaka</a></p></option>
                                <option><p><a href="">Cox's Bazaar</a></p></option>
                                <option><p><a href="">Comilla</a></p></option>
                                <option><p><a href="">Chittagong</a></p></option>
                                
                            </select>
                        </div>
                        <div class="search_item">
                            <div>To</div>
                            <select name="to_location" id="adults_1" class="dropdown_item_select search_input  ">
                                <option><p><a href="">Dhaka</a></p></option>
                                <option><p><a href="">Cox's Bazaar</a></p></option>
                                <option><p><a href="">Comilla</a></p></option>
                                <option><p><a href="">Chittagong</a></p></option>
                               
                            </select>
                        </div> 
                      
                            
                     <div class="search_item ">
                          
                           <label for="exampleInputEmail1" class="form-label fw-bold text-light">Date</label>
                                <input name="trip_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              
                         </div>
                       
                        
                        <button class="button search_button">search</button>
                    </form>
                    </div> 

           
            </div> 
        </div>
    </div>		
</div> 





