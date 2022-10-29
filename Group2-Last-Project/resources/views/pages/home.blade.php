@extends('layouts.app')

    @section('content')
        <main>
          <section id="Home" style="
          min-height: 65vh;
          background-color: #09141d;
          border: brown solid 5px;">
            <div class="container">
              <!-- Stack the columns on mobile by making one full-width and the other half-width -->
              <div class="row">
                <div class="col-6 col-md-4 d-flex mt-4">
                  <div className="Hero-Subtitle" style="padding-top:60px;">
                    <h3 style="  font-size: 46px; color: #fff; font-family: 'Poppins', sans-serif;">
                    The best platform <br>to Buy and Sell properties</h3> <br>
                    <p style="font-size: 25px; color: white; font-family: 'Roboto Condensed', sans-serif;">
                    See properties that might <br> pique your interests</p>
                    <button type="button" class="btn btn-dark btn-lg" style="font-family:'Poppins', sans-serif; width:10rem;">Explore</button>
                  </div>   
                </div>
              
                <div class="col-md-8 mb-3">
                  <div class="HouseHero">
                    <img style=" margin-top: 3%;
                    height: 60vh;
                    width: 40vw;
                    border: solid black 3px;
                    border-top-left-radius: 190%;
                    border-top-right-radius: 190%;
                    border-bottom-left-radius: 0;" src="/assets/HouseHero.jpg" alt="House Property">
                  </div>
                </div>
              </div>
            </div>
        </section>
          <section class="Search-Filter" style="    min-height: 12vh;
          /* border: green solid 4px; */
          background-color: #368D96; border:solid pink 5px">
            <div class="row row-cols-lg-auto g-3 justify-content-center">
              <div class="col">
                  <div class="input-group mb-2">
                    <label class="input-group-text" for="inputGroupSelect01">Location:</label>
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Find property in your area...</option>
                      <option value="1">Luzon</option>
                      <option value="2">Visayas</option>
                      <option value="3">Mindanao</option>
                    </select>
                  </div>
              </div>
              <div class="col">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01">Property Type:</label>
                  <select class="form-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">Apartment</option>
                    <option value="2">Condominium</option>
                    <option value="3">House and Lot</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01">Estimated Price</label>
                  <select class="form-select" id="inputGroupSelect01">
                   <option selected>Choose...</option>
                    <option value="1">1-5M</option>
                    <option value="2">6-10M</option>
                    <option value="3">11M and up</option>
                  </select>
                </div>
              </div>
              <div class="search-btn"> 
                <button class="btn btn-dark btn-lg">Search</button></div>
            </div>
          </section>
          <section id="Grid-Places" style="  min-height: 50vh;
          border: solid rgb(65, 66, 116) 5px;">
            
              <br> <br>
              <h3 class="text-center">Discover Awesome Properties</h3>
             <br> <br>
            <div class="row row-cols-lg-auto g-3 justify-content-center">
              <div class="row">
                <div class="col">
                  <img class="shadow lg p-1 mb-2" src="/assets/DiningArea.jpg" style="width: 240px;
                      min-height: 28vh;  border-top-left-radius: 10px;
                      border-bottom-left-radius: 15px;
                      border-bottom-right-radius: 15px;" alt="Dining Area">
                       {{-- <div class="card-img-overlay">
                          <h5 class="card-title">Card title</h5>
                        </div> --}}
                </div>
             
      
                  <div class="col">
                    <img class="shadow lg p-1 mb-2" src="/assets/Mindanao.jpg" style="width: 240px;
                      min-height: 28vh; border-top-left-radius: 10px;
                      border-bottom-left-radius: 15px;
                      border-bottom-right-radius: 15px;" alt="Dining Area">
                  </div>

                    <div class="col">
                      <img class="shadow lg p-1 mb-2" src="/assets/property1.jpg" style="width: 240px;
                      min-height: 28vh; border-top-right-radius: 10px;
                      border-bottom-left-radius: 15px;
                      border-bottom-right-radius: 15px;" alt="Dining Area">
                    </div> 

                    <div class="col">
                      <img class="shadow lg p-1 mb-2" src="/assets/Bathroom.jpg" style="width: 240px;
                      min-height: 28vh; border-top-right-radius: 10px;
                      border-bottom-left-radius: 15px;
                      border-bottom-right-radius: 15px;" alt="Dining Area">
                    </div> 
              </div>
            </div>
            
   </section>
        <section id="Discover">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col">
                <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button class="btn btn-dark">Contact Agent</button>
                    <button class="btn btn-dark">See Details</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button class="btn btn-dark" >Contact Agent</button>
                    <button class="btn btn-dark">See Details</button>
                  </div>
                </div>
              </div>
        {{--  --}}
            </div>
          </div>
          <br>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col">
                <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button>Contact Agent</button>
                    <button>See Details</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button>Contact Agent</button>
                    <button>See Details</button>
                  </div>
                </div>
              </div>
              {{--  --}}
            </div>
          </div>
        </section>

          <br> <br>
        <section id="Recent" style="min-height: 70vh; border: solid yellow 5px;">
            <div class="card text-white justify-content-center" style="width: 20%;">
              <img class="card-img" src="/assets/House2.jpg" alt="Card image">
              <div class="card-img-overlay" style="background-color: rgba(127, 255, 212, 0.144)">
                <p class="card-text">Description Last updated 3 mins ago</p>
                <button>Contact Brokers</button>
              </div>
            </div>
            
      </section>
        
         
        </main>

    <div>
      @endsection
    </div>
 </body> 
 </html>