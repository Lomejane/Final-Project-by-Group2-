@extends('layouts.app')

    @section('content')
        <main>
          {{-- HOME --}}
        <section id="Home" style="
          min-height: 65vh;
          background-color: #09141d;">
            <div class="container">
              <!-- Stack the columns on mobile by making one full-width and the other half-width -->
              <div class="row">
                <div class="col-6 col-md-4 d-flex mt-4">
                  <div className="Hero-Subtitle" style="padding-top:60px;">
                    <h3 style="  font-size: 46px; color: #fff; font-family: 'Poppins', sans-serif;">
                    The best platform <br>to Buy and Sell properties</h3> <br>
                    <p style="font-size: 25px; color: white; font-family: 'Roboto Condensed', sans-serif;">
                    See properties that might <br> pique your interests</p>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width:10rem; height: 3rem; background-color:#368D96; border:none; border-radius: 8px;">Explore</button>
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
        {{-- SEARCH FILTER --}}
        <section class="Search-Filter" style="min-height: 15vh; padding: 30px; background-color: #368D96;">
          <div class="row row-cols-lg-auto g-4 justify-content-center">

            <div class="col">
              <div class="input-group mb-2">
                <label class="input-group-text" for="inputGroupSelect01" style="height: 4rem; font-size: 1.2rem;">Location</label>
                <select class="form-select" id="inputGroupSelect01" style="font-size: 1.2rem;">
                  <option selected>Select..</option>
                  <option value="1">Luzon</option>
                  <option value="2">Visayas</option>
                  <option value="3">Mindanao</option>
                </select>
              </div>
              </div>

              <div class="col">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01" style="height: 4rem; font-size: 1.2rem;">Property:</label>
                  <select class="form-select" id="inputGroupSelect01" style="font-size: 1.2rem;">
                    <option selected>Type...</option>
                    <option value="1">Apartment</option>
                    <option value="2">Condominium</option>
                    <option value="3">House and Lot</option>
                  </select>
                </div>
              </div>

              <div class="col">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01" style="height: 4rem; font-size: 1.2rem;">Estimated</label>
                  <select class="form-select" id="inputGroupSelect01" style="font-size: 1.2rem;">
                   <option selected>Price...</option>
                    <option value="1">1-5M</option>
                    <option value="2">6-10M</option>
                    <option value="3">11M and up</option>
                  </select>
                </div>
              </div>

              <div class="col" style="padding: 7px;">
                <button class="btn btn-dark btn-lg" style="padding-bottom: 10px;">Search</button>
              </div>
              
            </div>
          </section>
          {{-- GRID PLACES --}}
          <section id="Grid-Places" style="  min-height: 50vh;">
            <br> <br>
            <h3 class="text-center">Discover Awesome Properties</h3>
            <br> <br>

            <div class="row row-cols-lg-auto g-3 justify-content-center">

              <div class="col">
                <img class="shadow lg p-1 mb-2" src="/assets/DiningArea.jpg" style="width: 240px; min-height: 28vh; border-top-left-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
              </div>

              <div class="col">
                <img class="shadow lg p-1 mb-2" src="/assets/a.jpg" style="width: 240px; min-height: 28vh; border-top-left-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
              </div>
              <div class="col">
                <img class="shadow lg p-1 mb-2" src="/assets/property1.jpg" style="width: 240px; min-height: 28vh; border-top-right-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
              </div>
              <div class="col">
                <img class="shadow lg p-1 mb-2" src="/assets/Bathroom.jpg" style="width: 240px; min-height: 28vh; border-top-right-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
              </div> 
            </div>
        </section>
        <br>
        {{-- DISCOVER --}}
        <section id="discover" style="background-color: #FAD9C1">
          <br><br>
          <h3 class="text-center">All Over The Philippines</h3>
          <br> 
          <br>
          <div class="container">
            <div class="row d-flex justify-content-around">
              <div class="col">
                <div class="card shadow" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card shadow" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                  </div>
                </div>
              </div>
            </div>
            <br> <br> <br>
              <div class="container">
                <div class="row d-flex justify-content-around">
                  <div class="col">
                    <div class="card shadow" style="width: 20rem;">
                      <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                        <h6>Location: 123 Riza St. Dumaguete City</h6>
                        <h6>No. of Bedrooms: 2 Only</h6>
                        <h6>Price: ₱ 10,000 Monthly </h6>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow" style="width: 20rem;">
                      <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                        <h6>Location: 123 Riza St. Dumaguete City</h6>
                        <h6>No. of Bedrooms: 2 Only</h6>
                        <h6>Price: ₱ 10,000 Monthly </h6>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                      </div>
                    </div>
                  </div>
    
                  <div class="col">
                    <div class="card shadow" style="width: 20rem;">
                      <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                        <h6>Location: 123 Riza St. Dumaguete City</h6>
                        <h6>No. of Bedrooms: 2 Only</h6>
                        <h6>Price: ₱ 10,000 Monthly </h6>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                      </div>
                    </div>
                  </div>
                </div>
            {{--  --}}
          </div>
        </section>
        {{-- RECENT --}}
        <section id="recent">
          <div class="recent-property-container">
              <div class="recent-image">
                  <img src="/assets/HouseEmoji.png" alt="house emoji" class="recent-image">
                  <h3>Recent Listing</h3>
              </div>
              
              <div class="grid-container1">
                  <div class="grid-item1">
                      <img src="/assets/condo.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
                  <div class="grid-item2">
                      <img src="/assets/apartment.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
                  <div class="grid-item2">
                      <img src="/assets/house.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
              </div> <br> <br>

              <div class="grid-container2">
                  <div class="grid-item1">
                      <img src="/assets/condo 2.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
                  <div class="grid-item2">
                      <img src="/assets/apartment2.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                           <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>

                      </div>
                  </div>
                  <div class="grid-item2">
                      <img src="/assets/house2.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
              </div> 
          </div>
        </section>
        {{--  --}}
      </main>

    <div>
      @endsection
    </div>
    
 </body> 
 </html>