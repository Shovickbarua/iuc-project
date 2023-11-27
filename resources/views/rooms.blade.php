@extends('layouts.main')
@section('title', 'Room')
@section('content')

<div class="roompage">
    <!-- 1st room -->
    <section id="rooms-section1">
    <div class="allroom-card">
      <div class="room-details">
        <!-- Room Details Section -->
        
        <div class="row group-room">
          <div class="col-md-5 room-slider">
            <!-- Slider Carousel -->
            <div id="roomSlider" class="carousel slide pt-1" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('/')}}dist/asset/image/room-image2.jpg" class=" slider-image" alt="Image 1">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('/')}}dist/asset/image/room-image3.jpg" class=" slider-image" alt="Image 2">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('/')}}dist/asset/image/single-room-3.jpg" class="slider-image" alt="Image 3">
                </div>
                <!-- Add more images as needed -->
              </div>
              <a class="carousel-control-prev" href="#roomSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon slider-arrow " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next " href="#roomSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
              <!-- Room Details -->
              <div class="col-md-7 ">
                <h2 class="mt-3">Single Room</h2>
                <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
                <div class="room-facilities">
              <div class="row">
              <div class="col-lg-5 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/square-fit.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> 30 m² </span>
              </div>
            <div class="col-lg-7 allroom-facilities">
              <img src="{{asset('/')}}dist/asset/image/icon/wifi.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Inclusive WiFi </span>
          </div>
          <div class="col-lg-5 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/bed.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Single </span>
          </div>
          <div class="col-lg-7 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/breakfast.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Complimentary Breakfast </span>
          </div>
          
          
          <div class="col-lg-12 roomprice">
          <p class="roompricetag mt-3">$100</p>
          <p class="roomduration">per night</p>
          </div>
              </div>
            </div>
          </div>
        
              <div class="col-lg-7 roomdetails">
                  <button class="roomdetails-btn" id="showDetails1">ROOM DETAILS</button>
                </div>
                <div class="col-lg-5 roombook ">
                  <button  type="button" class=" roombook-btn" data-toggle="modal" data-target="#reservationModal">Book Now</button>
                </div>
              </div>
            </div>
        
            <!-- reservation -->
            <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
              
              <div class="modal-dialog" role="document">
                <form method="POST" action="{{route('book-save')}}" enctype="multipart/form-data">
                  @csrf
                    <div class="modal-content">
            
            
                      <div class="modal-body">
                        <div class="reservation-heading">Reservation</div>
          
        
                        <div class="form-group">
                            <input type="text" placeholder="Enter your name" name="name" class="form-control" id="name" required>
                        </div>
        
                        <div class="form-group">
                          <input type="text" placeholder="Enter your phone number" name="phone_number" class="form-control" id="phone number" required>
                      </div>
        
                        <div class="form-group">
                            <input type="email"  placeholder="Enter your email" name="email" class="form-control" id="email" required>
                        </div>
        
        
        
                        <div class="form-group">
                          <label for="roomcategory" class="reserve-label">Room NO </label>
                          <select class="form-control" name="roomcategory" id="roomcategory" required>
                              <option value="Normal">1</option>
                              <option value="Standered">2</option>
                              <option value="Premium">3</option>
                              <option value="Super Premium">4</option>
                          </select>
                        </div>
        
        
        
                        <div class="form-group">
                            <label for="checkInDate">Check-in Date</label>
                            <input type="date" class="form-control" name="checkInDate" id="checkInDate" required>
                        </div>
        
        
        
                        <div class="form-group">
                            <label for="checkOutDate">Check-out Date</label>
                            <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" required>
                        </div>
        
        
                      
                    </div>
                    <div class="modal-footer">
                        <button type="" class=" btn-reservation-close" data-dismiss="modal">Close</button>
                        <button type="submit" class=" btn-reservation-reserve" id="reserveButton">Reserve</button>
                    </div>
        
        
        
                  
        
        
                </div>
                  </form>

            
                </div>
            
            </div>
  
  
            <!-- room-detailsbutton -->
                  <div id="roomdetailsshow1">
                    <div class="details-table container ">
                        
                      <div class="row ratecard-info ">
                        <div class="col-sm-5">
                        <div class="rate-cards-detials">
                            <div class="rate-card-room-details-wrap">
                                <div class="roomdetails-heading ">ROOM DETAILS</div>
                                <div class="roomdetailsbtn-content"><p>These cozy rooms located in the historic Palace Wing are the gateway to a memorable experience. Perfect for meditation, these windowless rooms offer you complete tranquillity. Designed for our jet-setting business travellers who require silence</p>
                                </div>
                                <div>
                                    <div class="roomdetails-heading mt-4">SIZE</div>
                                    <div class="roomdetailsbtn-content">37 Sq Mt</div>
                                </div>
                                <div>
                                    <div class="roomdetails-heading mt-3">SIGNATURE FEATURE</div>
                                    <div class="roomdetailsbtn-content">Airport transfer</div>
                                </div>
                                
                                <div>
                                    <div class="roomdetails-heading mt-3">Occupancy Details</div>
                                    <div class="roomdetailsbtn-content">Up to 3 guests. Max Adults: 2, Max Children: 2</div>
                                </div>
                                </div>
                            </div>
                  </div>
              
                          <div class=" room-card-border">
                          <div class="col-sm-7 ">
                          <div class="rate-card-service-details-wrap">
                              <div class="clearfix service-details-subsection-container mx-3">
                                  
                                  <div class="service-details-subsection">
                                      <div>
                                          <div class="roomdetails-heading">OTHER CONVENIENCES</div>
                                        
                                              
                                                      <div>24-hour in-room dining
                                          
                                              
                                                      Premium Wi-Fi at nominal charge </div>
                                          
                                              
                                                      <div>Inclusive newspapers</div>
                                          
                                              
                                                      <div>Tea-coffee maker</div>
                                          
                                            
                                                      <div>Higher Floor</div>
                                          
                                              
                                                  <div>Inclusive of WiFi</div>
                                          
                                      </div>
                                  </div>
                                  
                                  
                              </div>
                          </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
    </div>
    </section>
  
    <!-- 2nd room -->
    <section id="rooms-section2">
    <div class="allroom-card">
      <div class="room-details">
    <!-- Room Details Section -->
  
      <div class="row">
        <div class="col-md-5 room-slider">
          <!-- Slider Carousel -->
          <div id="roomSlider1" class="carousel slide pt-3" data-ride="carouse1">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('/')}}dist/asset/image/room-image4.jpg" class="d-block" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/')}}dist/asset/image/deluxe room (1).jpg" class="d-block" alt="Image 2">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/')}}dist/asset/image/single-room-3.jpg" class="d-block" alt="Image 3">
              </div>
              <!-- Add more images as needed -->
            </div>
            <a class="carousel-control-prev" href="#roomSlider1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon  slider-arrow" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#roomSlider1" role="button" data-slide="next">
              <span class="carousel-control-next-icon  slider-arrow" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
          <!-- Room Details -->
          <div class="col-md-7">
            <h2 class="mt-3">Deluxe Room</h2>
            <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
            <div class="room-facilities">
              <div class="row">
              <div class="col-lg-5 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/square-fit.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> 40 m² </span>
              </div>
            <div class="col-lg-7 allroom-facilities">
              <img src="{{asset('/')}}dist/asset/image/icon/wifi.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Inclusive WiFi </span>
          </div>
          <div class="col-lg-5 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/bed.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Double</span>
            <!-- <i class= "fa fa-solid fa-bed-front"></i><span> King </span> -->
          </div>
          <div class="col-lg-7 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/swim.png" class="roomicon-image"  alt=""><span class="mx-2 icon-details"> Complimentary Swimming</span>
          </div>
          <div class="col-lg-12 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/breakfast.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Complimentary Breakfast </span>
          </div>
          
          <div class="col-lg-12 roomprice">
          <p class="roompricetag mt-3">$200</p>
          <p class="roomduration">per night</p>
          </div>
              </div>
            </div>
          </div>
  
          <div class="col-lg-7 roomdetails">
              <button class="roomdetails-btn" id="showDetails2">ROOM DETAILS</button>
            </div>
            <div class="col-lg-5 roombook ">
              <button  type="button" class=" roombook-btn" data-toggle="modal" data-target="#reservationModal">Book Now</button>
            </div>
          </div>
        </div>
  
        <!-- reservation -->
        <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
  
          <div class="modal-dialog" role="document">
            <form method="POST" action="{{route('book-save')}}" enctype="multipart/form-data">
              @csrf
                <div class="modal-content">
        
        
                    <div class="modal-body">
                    <div class="reservation-heading">Reservation</div>
          
        
                        <div class="form-group">
                            <input type="text" placeholder="Enter your name" name="name" class="form-control" id="name" required>
                        </div>
        
                        <div class="form-group">
                          <input type="text" placeholder="Enter your phone number" name="phone_number" class="form-control" id="phone number" required>
                      </div>
        
                        <div class="form-group">
                            <input type="email"  placeholder="Enter your email" name="email" class="form-control" id="email" required>
                        </div>
        
        
        
                        <div class="form-group">
                          <label for="roomcategory" class="reserve-label">Room No </label>
                          <select class="form-control" name="roomcategory" id="roomcategory" required>
                              <option value="Normal">1</option>
                              <option value="Standered">2</option>
                              <option value="Premium">3</option>
                              <option value="Super Premium">4</option>
                          </select>
                        </div>
        
        
        
                        <div class="form-group">
                            <label for="checkInDate">Check-in Date</label>
                            <input type="date" class="form-control" name="checkInDate" id="checkInDate" required>
                        </div>
        
        
        
                        <div class="form-group">
                            <label for="checkOutDate">Check-out Date</label>
                            <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" required>
                        </div>
        
        
                      
                    </div>
                    <div class="modal-footer">
                      <button type="" class=" btn-reservation-close" data-dismiss="modal">Close</button>
                      <button type="submit" class=" btn-reservation-reserve" id="reserveButton">Reserve</button>
                  </div>
        
        
        
               
                  
        
        
                </div>
        
            </div>
          </form>
        
        </div>
  
  
  
  
  
        <!-- room-detailsbutton -->
              <div id="roomdetailsshow2">
                <div class="details-table container ">
                    
                  <div class="row ratecard-info ">
                    <div class="col-md-5">
                    <div class="rate-cards-detials">
                        <div class="rate-card-room-details-wrap">
                            <div class="roomdetails-heading ">ROOM DETAILS</div>
                            <div class="roomdetailsbtn-content"><p>These cozy rooms located in the historic Palace Wing are the gateway to a memorable experience. Perfect for meditation, these windowless rooms offer you complete tranquillity. Designed for our jet-setting business travellers who require silence</p>
                            </div>
                            <div>
                                <div class="roomdetails-heading mt-4">SIZE</div>
                                <div class="roomdetailsbtn-content">37 Sq Mt</div>
                            </div>
                            <div>
                                <div class="roomdetails-heading mt-3">SIGNATURE FEATURE</div>
                                <div class="roomdetailsbtn-content">Airport transfer</div>
                            </div>
                            
                            <div>
                                <div class="roomdetails-heading mt-3">Occupancy Details</div>
                                <div class="roomdetailsbtn-content">Up to 3 guests. Max Adults: 2, Max Children: 2</div>
                            </div>
                            </div>
                        </div>
              </div>
          
                      <div class=" room-card-border">
                      <div class="col-md-7">
                      <div class="rate-card-service-details-wrap">
                          <div class="clearfix service-details-subsection-container mx-3">
                              
                              <div class="service-details-subsection">
                                  <div>
                                      <div class="roomdetails-heading">OTHER CONVENIENCES</div>
                                    
                                          
                                                  <div>24-hour in-room dining
                                      
                                          
                                                  Premium Wi-Fi at nominal charge </div>
                                      
                                          
                                                  <div>Inclusive newspapers</div>
                                      
                                          
                                                  <div>Tea-coffee maker</div>
                                      
                                        
                                                  <div>Higher Floor</div>
                                      
                                          
                                              <div>Inclusive of WiFi</div>
                                      
                                  </div>
                              </div>
                              
                              
                          </div>
                      </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- 3rd rooom -->
    <section id="rooms-section3">
    <div class="allroom-card">
          <div class="room-details">
            <!-- Room Details Section -->
            
              <div class="row">
                <div class="col-md-5 room-slider">
                  <!-- Slider Carousel -->
                  <div id="roomSlider2" class="carousel slide pt-3" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('/')}}dist/asset/image/deluxe room.jpg" class="d-block" alt="Image 1">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/')}}dist/asset/image/room-lobby.jpg" class="d-block" alt="Image 2">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/')}}dist/asset/image/single-room-3.jpg" class="d-block" alt="Image 3">
                      </div>
                      <!-- Add more images as needed -->
                    </div>
                    <a class="carousel-control-prev" href="#roomSlider2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#roomSlider2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                  <!-- Room Details -->
                  <div class="col-md-7">
                    <h2 class="mt-3">Couple Room</h2>
                    <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
                      <div class="room-facilities">
              <div class="row">
              <div class="col-lg-5 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/square-fit.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> 40 m² </span>
              </div>
            <div class="col-lg-7 allroom-facilities">
              <img src="{{asset('/')}}dist/asset/image/icon/wifi.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Inclusive WiFi </span>
          </div>
          <div class="col-lg-5 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/bed.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> King </span>
            <!-- <i class= "fa fa-solid fa-bed-front"></i><span> King </span> -->
          </div>
          <div class="col-lg-7 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/people.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Up to 3 guest </span>
          </div>
          <div class="col-lg-5 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/breakfast.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Complimentary Breakfast </span>
          </div>
          <div class="col-lg-7 allroom-facilities">
            <img src="{{asset('/')}}dist/asset/image/icon/swim.png" class="roomicon-image"  alt=""><span class="mx-2 icon-details"> Complimentary Swimming</span>
          </div>
          <div class="col-lg-12 roomprice">
          <p class="roompricetag mt-3">$300</p>
          <p class="roomduration">per night</p>
          </div>
              </div>
            </div>
          </div>
            
                  <div class="col-lg-7 roomdetails">
                      <button class="roomdetails-btn" id="showDetails3">ROOM DETAILS</button>
                    </div>
                    <div class="col-lg-5 roombook ">
                      <button  type="button" class=" roombook-btn" data-toggle="modal" data-target="#reservationModal">Book Now</button>
                    </div>
                  </div>
                </div>
            
                <!-- reservation -->
                <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                
                  
                  <div class="modal-dialog" role="document">
                    <form method="POST" action="{{route('book-save')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-content">
                
                
                          <div class="modal-body">
                            <div class="reservation-heading">Reservation</div>            
                  
                
                                <div class="form-group">
                                    <input type="text" placeholder="Enter your name" name="name" class="form-control" id="name" required>
                                </div>
                
                                <div class="form-group">
                                  <input type="text" placeholder="Enter your phone number" name="phone_number" class="form-control" id="phone number" required>
                              </div>
                
                                <div class="form-group">
                                    <input type="email"  placeholder="Enter your email" name="email" class="form-control" id="email" required>
                                </div>
                
                
                
                                <div class="form-group">
                                  <label for="roomcategory" class="reserve-label">Room No </label>
                                  <select class="form-control" name="roomcategory" id="roomcategory" required>
                                      <option value="Normal">1</option>
                                      <option value="Standered">2</option>
                                      <option value="Premium">3</option>
                                      <option value="Super Premium">4</option>
                                  </select>
                                </div>
                
                
                
                                <div class="form-group">
                                    <label for="checkInDate">Check-in Date</label>
                                    <input type="date" class="form-control" name="checkInDate" id="checkInDate" required>
                                </div>
                
                
                
                                <div class="form-group">
                                    <label for="checkOutDate">Check-out Date</label>
                                    <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" required>
                                </div>
                
                
                              
                            </div>
                            <div class="modal-footer">
                              <button type="" class=" btn-reservation-close" data-dismiss="modal">Close</button>
                              <button type="submit" class=" btn-reservation-reserve" id="reserveButton">Reserve</button>
                          </div>
                
                
                
                          
                          
                
                
                        </div>
                      </form>
                  </div>
                
                </div>
  
      <!-- room-detailsbutton -->
                      <div id="roomdetailsshow3">
                        <div class="details-table container ">
                            
                          <div class="row ratecard-info ">
                            <div class="col-md-5">
                            <div class="rate-cards-detials">
                                <div class="rate-card-room-details-wrap">
                                    <div class="roomdetails-heading ">ROOM DETAILS</div>
                                    <div class="roomdetailsbtn-content"><p>These cozy rooms located in the historic Palace Wing are the gateway to a memorable experience. Perfect for meditation, these windowless rooms offer you complete tranquillity. Designed for our jet-setting business travellers who require silence</p>
                                    </div>
                                    <div>
                                        <div class="roomdetails-heading mt-4">SIZE</div>
                                        <div class="roomdetailsbtn-content">37 Sq Mt</div>
                                    </div>
                                    <div>
                                        <div class="roomdetails-heading mt-3">SIGNATURE FEATURE</div>
                                        <div class="roomdetailsbtn-content">Airport transfer</div>
                                    </div>
                                    
                                    <div>
                                        <div class="roomdetails-heading mt-3">Occupancy Details</div>
                                        <div class="roomdetailsbtn-content">Up to 3 guests. Max Adults: 2, Max Children: 2</div>
                                    </div>
                                    </div>
                                </div>
                      </div>
                  
                              <div class=" room-card-border">
                              <div class="col-md-7">
                              <div class="rate-card-service-details-wrap">
                                  <div class="clearfix service-details-subsection-container mx-3">
                                      
                                      <div class="service-details-subsection">
                                          <div>
                                              <div class="roomdetails-heading">OTHER CONVENIENCES</div>
                                            
                                                  
                                                          <div>24-hour in-room dining
                                              
                                                  
                                                          Premium Wi-Fi at nominal charge </div>
                                              
                                                  
                                                          <div>Inclusive newspapers</div>
                                              
                                                  
                                                          <div>Tea-coffee maker</div>
                                              
                                                
                                                          <div>Higher Floor</div>
                                              
                                                  
                                                      <div>Inclusive of WiFi</div>
                                              
                                          </div>
                                      </div>
                                      
                                      
                                  </div>
                              </div>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>
    </section>
    <!-- 4th room -->
    <section id="rooms-section4">
    <div class="allroom-card">
    <div class="room-details">
      <!-- Room Details Section -->
      
        <div class="row">
          <div class="col-md-5 room-slider">
            <!-- Slider Carousel -->
            <div id="roomSlider3" class="carousel slide pt-3" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('/')}}dist/asset/image/family room.jpg" class="d-block" alt="Image 1">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('/')}}dist/asset/image/deluxe room (1).jpg" class="d-block" alt="Image 2">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('/')}}dist/asset/image/Exucutive-suite.jpg" class="d-block" alt="Image 3">
                </div>
                <!-- Add more images as needed -->
              </div>
              <a class="carousel-control-prev" href="#roomSlider3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#roomSlider3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
            <!-- Room Details -->
            <div class="col-md-7">
              <h2 class="mt-3">Presidental Suite</h2>
              <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
                <div class="room-facilities">
                    <div class="row">
                    <div class="col-lg-5 allroom-facilities">
                      <img src="{{asset('/')}}dist/asset/image/icon/square-fit.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> 60 m² </span>
                    </div>
                  <div class="col-lg-7 allroom-facilities">
                    <img src="{{asset('/')}}dist/asset/image/icon/wifi.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Inclusive WiFi </span>
                </div>
                <div class="col-lg-5 allroom-facilities">
                  <img src="{{asset('/')}}dist/asset/image/icon/bed.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> King </span>
                  <!-- <i class= "fa fa-solid fa-bed-front"></i><span> King </span> -->
                </div>
                <div class="col-lg-7 allroom-facilities">
                  <img src="{{asset('/')}}dist/asset/image/icon/people.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Up to 4 guest </span>
                </div>
                <div class="col-lg-5 allroom-facilities">
                  <img src="{{asset('/')}}dist/asset/image/icon/breakfast.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Complimentary Breakfast </span>
                </div>
                <div class="col-lg-7 allroom-facilities">
                  <img src="{{asset('/')}}dist/asset/image/icon/swim.png" class="roomicon-image"  alt=""><span class="mx-2 icon-details"> Complimentary Swimming</span>
                </div>
                <div class="col-lg-12 roomprice">
                <p class="roompricetag mt-3">$500</p>
                <p class="roomduration">per night</p>
                </div>
                    </div>
                  </div>
                </div>
            <div class="col-lg-7 roomdetails">
                <button class="roomdetails-btn" id="showDetails4">ROOM DETAILS</button>
              </div>
              <div class="col-lg-5 roombook ">
                <button  type="button" class=" roombook-btn" data-toggle="modal" data-target="#reservationModal">Book Now</button>
              </div>
            </div>
          </div>
      
          <!-- reservation -->
          <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          
      
            <div class="modal-dialog" role="document">
          
              <form method="POST" action="{{route('book-save')}}" enctype="multipart/form-data">
                @csrf
                  <div class="modal-content">
          
          
                    <div class="modal-body">
                      <div class="reservation-heading">Reservation</div>                
            
          
                          <div class="form-group">
                              <input type="text" placeholder="Enter your name" name="name" class="form-control" id="name" required>
                          </div>
          
                          <div class="form-group">
                            <input type="text" placeholder="Enter your phone number" name="phone_number" class="form-control" id="phone number" required>
                        </div>
          
                          <div class="form-group">
                              <input type="email"  placeholder="Enter your email" name="email" class="form-control" id="email" required>
                          </div>
          
          
          
                          <div class="form-group">
                            <label for="roomcategory" class="reserve-label">Room No </label>
                            <select class="form-control" name="roomcategory" id="roomcategory" required>
                                <option value="Normal">1</option>
                                <option value="Standered">2</option>
                                <option value="Premium">3</option>
                                <option value="Super Premium">4</option>
                                <option value="Queen">Queen</option>
                            </select>
                          </div>
          
          
          
                          <div class="form-group">
                              <label for="checkInDate">Check-in Date</label>
                              <input type="date" class="form-control" name="checkInDate" id="checkInDate" required>
                          </div>
          
          
          
                          <div class="form-group">
                              <label for="checkOutDate">Check-out Date</label>
                              <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" required>
                          </div>
          
          
                        
                      </div>
                      <div class="modal-footer">
                        <button type="" class=" btn-reservation-close" data-dismiss="modal">Close</button>
                        <button type="submit" class=" btn-reservation-reserve" id="reserveButton">Reserve</button>
                    </div>         
                  </div>
              </form>
              </div>
          
          </div>
  
  
  
  
          <!-- room-details-button -->
                <div id="roomdetailsshow4">
                  <div class="details-table container ">
                      
                    <div class="row ratecard-info ">
                      <div class="col-md-5">
                      <div class="rate-cards-detials">
                            <div class="rate-card-room-details-wrap">
                                <div class="roomdetails-heading ">ROOM DETAILS</div>
                                <div class="roomdetailsbtn-content"><p>These cozy rooms located in the historic Palace Wing are the gateway to a memorable experience. Perfect for meditation, these windowless rooms offer you complete tranquillity. Designed for our jet-setting business travellers who require silence</p>
                              </div>
                                <div>
                                    <div class="roomdetails-heading mt-4">SIZE</div>
                                    <div class="roomdetailsbtn-content">37 Sq Mt</div>
                                </div>
                                <div>
                                    <div class="roomdetails-heading mt-3">SIGNATURE FEATURE</div>
                                    <div class="roomdetailsbtn-content">Airport transfer</div>
                                </div>
                                
                                <div>
                                    <div class="roomdetails-heading mt-3">Occupancy Details</div>
                                    <div class="roomdetailsbtn-content">Up to 3 guests. Max Adults: 2, Max Children: 2</div>
                                </div>
                              </div>
                            </div>
                </div>
              
                        <div class=" room-card-border">
                          <div class="col-md-7">
                          <div class="rate-card-service-details-wrap">
                              <div class="clearfix service-details-subsection-container mx-3">
                                  
                                  <div class="service-details-subsection">
                                      <div>
                                          <div class="roomdetails-heading">OTHER CONVENIENCES</div>
                                        
                                              
                                                    <div>24-hour in-room dining
                                          
                                              
                                                    Premium Wi-Fi at nominal charge </div>
                                          
                                              
                                                    <div>Inclusive newspapers</div>
                                          
                                              
                                                    <div>Tea-coffee maker</div>
                                          
                                            
                                                      <div>Higher Floor</div>
                                          
                                              
                                                  <div>Inclusive of WiFi</div>
                                        
                                      </div>
                                  </div>
                                  
                                  
                              </div>
                          </div>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>
    </section>
  
    <!-- 5th room -->
    <section id="rooms-section5">
    <div class="allroom-card">
      <div class="room-details">
    <!-- Room Details Section -->
  
      <div class="row">
        <div class="col-md-5 room-slider">
          <!-- Slider Carousel -->
          <div id="roomSlider4" class="carousel slide pt-3" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('/')}}dist/asset/image/room-image1.jpg" class="d-block" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/')}}dist/asset/image/royal suite2.jpg" class="d-block" alt="Image 2">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/')}}dist/asset/image/Exucutive-suite.jpg" class="d-block" alt="Image 3">
              </div>
              <!-- Add more images as needed -->
            </div>
            <a class="carousel-control-prev" href="#roomSlider4" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#roomSlider4" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
          <!-- Room Details -->
          <div class="col-md-7">
            <h2 class="mt-3">Royal Suite</h2>
            <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
                <div class="room-facilities">
                  <div class="row">
                  <div class="col-lg-5 allroom-facilities">
                    <img src="{{asset('/')}}dist/asset/image/icon/square-fit.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> 60 m² </span>
                  </div>
                <div class="col-lg-7 allroom-facilities">
                  <img src="{{asset('/')}}dist/asset/image/icon/wifi.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Inclusive WiFi </span>
              </div>
              <div class="col-lg-5 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/bed.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> King </span>
                <!-- <i class= "fa fa-solid fa-bed-front"></i><span> King </span> -->
              </div>
              <div class="col-lg-7 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/people.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Up to 4 guest </span>
              </div>
              <div class="col-lg-5 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/breakfast.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Complimentary Breakfast </span>
              </div>
              <div class="col-lg-7 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/swim.png" class="roomicon-image"  alt=""><span class="mx-2 icon-details"> Complimentary Swimming</span>
              </div>
              <div class="col-lg-12 roomprice">
              <p class="roompricetag mt-3">$600</p>
              <p class="roomduration">per night</p>
              </div>
                  </div>
                </div>
              </div>
  
          <div class="col-lg-7 roomdetails">
              <button class="roomdetails-btn" id="showDetails5">ROOM DETAILS</button>
            </div>
            <div class="col-lg-5 roombook ">
              <button  type="button" class=" roombook-btn" data-toggle="modal" data-target="#reservationModal">Book Now</button>
            </div>
          </div>
        </div>
  
        <!-- reservation -->
        <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
  
          <div class="modal-dialog" role="document">
        
            <form method="POST" action="{{route('book-save')}}" enctype="multipart/form-data">
              @csrf
                <div class="modal-content">
        
        
                  <div class="modal-body">
                    <div class="reservation-heading">Reservation</div>    
          
        
                        <div class="form-group">
                            <input type="text" placeholder="Enter your name" name="name" class="form-control" id="name" required>
                        </div>
        
                        <div class="form-group">
                          <input type="text" placeholder="Enter your phone number" name="phone_number" class="form-control" id="phone number" required>
                      </div>
        
                        <div class="form-group">
                            <input type="email"  placeholder="Enter your email" name="email" class="form-control" id="email" required>
                        </div>
        
        
        
                        <div class="form-group">
                          <label for="roomcategory" class="reserve-label">Room No </label>
                          <select class="form-control" name="roomcategory" id="roomcategory" required>
                              <option value="Normal">1</option>
                              <option value="Standered">2</option>
                              <option value="Premium">3</option>
                              <option value="Super Premium">4</option>
                          </select>
                        </div>
        
        
        
                        <div class="form-group">
                            <label for="checkInDate">Check-in Date</label>
                            <input type="date" class="form-control" name="checkInDate" id="checkInDate" required>
                        </div>
        
        
        
                        <div class="form-group">
                            <label for="checkOutDate">Check-out Date</label>
                            <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" required>
                        </div>
        
        
                      
                    </div>
                    <div class="modal-footer">
                      <button type="" class=" btn-reservation-close" data-dismiss="modal">Close</button>
                      <button type="submit" class=" btn-reservation-reserve" id="reserveButton">Reserve</button>
                  </div>
                </div>
            </form>
        
          </div>
        
        </div>
  
  
  
  
  
        <!-- room-detailsbutton -->
              <div id="roomdetailsshow5">
                <div class="details-table container ">
                    
                  <div class="row ratecard-info ">
                    <div class="col-md-5">
                    <div class="rate-cards-detials">
                        <div class="rate-card-room-details-wrap">
                            <div class="roomdetails-heading ">ROOM DETAILS</div>
                            <div class="roomdetailsbtn-content"><p>These cozy rooms located in the historic Palace Wing are the gateway to a memorable experience. Perfect for meditation, these windowless rooms offer you complete tranquillity. Designed for our jet-setting business travellers who require silence</p>
                            </div>
                            <div>
                                <div class="roomdetails-heading mt-4">SIZE</div>
                                <div class="roomdetailsbtn-content">37 Sq Mt</div>
                            </div>
                            <div>
                                <div class="roomdetails-heading mt-3">SIGNATURE FEATURE</div>
                                <div class="roomdetailsbtn-content">Airport transfer</div>
                            </div>
                            
                            <div>
                                <div class="roomdetails-heading mt-3">Occupancy Details</div>
                                <div class="roomdetailsbtn-content">Up to 3 guests. Max Adults: 2, Max Children: 2</div>
                            </div>
                            </div>
                        </div>
              </div>
          
                      <div class=" room-card-border">
                      <div class="col-md-7">
                      <div class="rate-card-service-details-wrap">
                          <div class="clearfix service-details-subsection-container mx-3">
                              
                              <div class="service-details-subsection">
                                  <div>
                                      <div class="roomdetails-heading">OTHER CONVENIENCES</div>
                                    
                                          
                                                  <div>24-hour in-room dining
                                      
                                          
                                                  Premium Wi-Fi at nominal charge </div>
                                      
                                          
                                                  <div>Inclusive newspapers</div>
                                      
                                          
                                                  <div>Tea-coffee maker</div>
                                      
                                        
                                                  <div>Higher Floor</div>
                                      
                                          
                                              <div>Inclusive of WiFi</div>
                                      
                                  </div>
                              </div>
                              
                              
                          </div>
                      </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  
  <!-- 6th room -->
  <section id="rooms-section6">
  <div class="allroom-card">
    <div class="room-details">
  <!-- Room Details Section -->
  
    <div class="row">
      <div class="col-md-5 room-slider">
        <!-- Slider Carousel -->
        <div id="roomSlider5" class="carousel slide pt-3" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('/')}}dist/asset/image/luxary room.jpg" class="d-block" alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="{{asset('/')}}dist/asset/image/couple-room.jpg" class="d-block" alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="{{asset('/')}}dist/asset/image/luxxary-room2.jpg" class="d-block" alt="Image 3">
            </div>
            <!-- Add more images as needed -->
          </div>
          <a class="carousel-control-prev" href="#roomSlider5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#roomSlider5" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
        <!-- Room Details -->
        <div class="col-md-7">
          <h2 class="mt-3">Executive Suite</h2>
          <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
                <div class="room-facilities">
                  <div class="row">
                  <div class="col-lg-5 allroom-facilities">
                    <img src="{{asset('/')}}dist/asset/image/icon/square-fit.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> 80 m² </span>
                  </div>
                <div class="col-lg-7 allroom-facilities">
                  <img src="{{asset('/')}}dist/asset/image/icon/wifi.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Inclusive WiFi </span>
              </div>
              <div class="col-lg-5 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/bed.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> King </span>
                <!-- <i class= "fa fa-solid fa-bed-front"></i><span> King </span> -->
              </div>
              <div class="col-lg-7 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/people.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Up to 5 guest </span>
              </div>
              <div class="col-lg-5 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/breakfast.png" class="roomicon-image" alt=""><span class="mx-2 icon-details"> Complimentary Breakfast </span>
              </div>
              <div class="col-lg-7 allroom-facilities">
                <img src="{{asset('/')}}dist/asset/image/icon/swim.png" class="roomicon-image"  alt=""><span class="mx-2 icon-details"> Complimentary Swimming</span>
              </div>
              <div class="col-lg-12 roomprice">
              <p class="roompricetag mt-3">$800</p>
              <p class="roomduration">per night</p>
              </div>
                  </div>
                </div>
              </div>
  
        <div class="col-lg-7 roomdetails">
            <button class="roomdetails-btn" id="showDetails6">ROOM DETAILS</button>
          </div>
          <div class="col-lg-5 roombook ">
            <button  type="button" class=" roombook-btn" data-toggle="modal" data-target="#reservationModal">Book Now</button>
          </div>
        </div>
      </div>
  
      <!-- reservation -->
      <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      
  
        <div class="modal-dialog" role="document">
      
          <form method="POST" action="{{route('book-save')}}" enctype="multipart/form-data">
            @csrf
              <div class="modal-content">
      
      
                <div class="modal-body">
                  <div class="reservation-heading">Reservation</div>    
        
      
                      <div class="form-group">
                          <input type="text" placeholder="Enter your name" name="name" class="form-control" id="name" required>
                      </div>
      
                      <div class="form-group">
                        <input type="text" placeholder="Enter your phone number" name="phone_number" class="form-control" id="phone number" required>
                    </div>
      
                      <div class="form-group">
                          <input type="email"  placeholder="Enter your email" name="email" class="form-control" id="email" required>
                      </div>
      
      
      
                      <div class="form-group">
                        <label for="roomcategory" class="reserve-label">Room No </label>
                        <select class="form-control" name="roomcategory" id="roomcategory" required>
                            <option value="Normal">1</option>
                            <option value="Standered">2</option>
                            <option value="Premium">3</option>
                            <option value="Super Premium">4</option>
                            <option value="Queen">Queen</option>
                        </select>
                      </div>
      
      
      
                      <div class="form-group">
                          <label for="checkInDate">Check-in Date</label>
                          <input type="date" class="form-control" name="checkInDate" id="checkInDate" required>
                      </div>
      
      
      
                      <div class="form-group">
                          <label for="checkOutDate">Check-out Date</label>
                          <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" required>
                      </div>
      
      
                    
                  </div>
                  <div class="modal-footer">
                    <button type="" class=" btn-reservation-close" data-dismiss="modal">Close</button>
                    <button type="submit" class=" btn-reservation-reserve" id="reserveButton">Reserve</button>
                </div>
              </div>
            </form>
          </div>
      
      </div>
  
  
  
  
  
      <!-- room-detailsbutton -->
            <div id="roomdetailsshow6">
              <div class="details-table container ">
                  
                <div class="row ratecard-info ">
                  <div class="col-md-5">
                  <div class="rate-cards-detials">
                       <div class="rate-card-room-details-wrap">
                           <div class="roomdetails-heading ">ROOM DETAILS</div>
                           <div class="roomdetailsbtn-content"><p>These cozy rooms located in the historic Palace Wing are the gateway to a memorable experience. Perfect for meditation, these windowless rooms offer you complete tranquillity. Designed for our jet-setting business travellers who require silence</p>
                          </div>
                           <div>
                               <div class="roomdetails-heading mt-4">SIZE</div>
                               <div class="roomdetailsbtn-content">37 Sq Mt</div>
                           </div>
                           <div>
                               <div class="roomdetails-heading mt-3">SIGNATURE FEATURE</div>
                               <div class="roomdetailsbtn-content">Airport transfer</div>
                           </div>
                           
                           <div>
                               <div class="roomdetails-heading mt-3">Occupancy Details</div>
                               <div class="roomdetailsbtn-content">Up to 3 guests. Max Adults: 2, Max Children: 2</div>
                           </div>
                          </div>
                       </div>
            </div>
         
                    <div class=" room-card-border">
                     <div class="col-md-7">
                     <div class="rate-card-service-details-wrap">
                         <div class="clearfix service-details-subsection-container mx-3">
                             
                             <div class="service-details-subsection">
                                 <div>
                                     <div class="roomdetails-heading">OTHER CONVENIENCES</div>
                                   
                                         
                                                <div>24-hour in-room dining
                                     
                                         
                                                Premium Wi-Fi at nominal charge </div>
                                     
                                         
                                                <div>Inclusive newspapers</div>
                                     
                                         
                                                <div>Tea-coffee maker</div>
                                     
                                       
                                                 <div>Higher Floor</div>
                                     
                                         
                                             <div>Inclusive of WiFi</div>
                                    
                                 </div>
                             </div>
                             
                             
                         </div>
                     </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</div>

@endsection