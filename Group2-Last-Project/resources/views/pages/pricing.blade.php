 @extends('layouts.app')

 @section('content')
 
 {{-- PRICING --}}

 <section id="Pricing" style="height: 90vh; background-color:#ffffff;">
    <div class="text-center" style="color: rgb(0, 0, 0);">
      <br> <br> <br> 
        <h3>Sign up to Our 7 days Free Trial and <br>
            Upload Properties as much as You Want. 
        </h3>
        <br> <br> <br>
    </div>

    <div class="container d-flex justify-content-center">
      <div class="row">
          
          <div class="col">
            <div class="card shadow" style="width: 20rem; height: 28rem; border-radius: 10px; border:#368D96 solid 1px;">
              <div class="card-header text-center">
                <h3>Free Trial</h3>
            </div>
            <div class="card-body word-wrap">
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>₱0.00 Good for 7 days
              </h5>
                
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Upload properties up to 2 only
              </h5>
            
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Track the status of your <span style="padding-left: 35px;">properties</span>
              </h5>
  
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Directly contact the Agents if <span style="padding-left: 35px;">you need help.</span>
              </h5>
  
              
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Relax And we'll work it.
              </h5>
  
              </div>
            </div>
          </div>

        {{--  --}}

        <div class="col">
          <div class="card shadow" style="width: 20rem; height: 28rem; border-radius: 10px; background-color: #368D96; color: #fff; ">
            <div class="card-header text-center">
                <h3>Premium Package</h3>
            </div>
            <div class="card-body word-wrap">
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>₱ 7,000 Every 12 Months
              </h5>
                
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Upload properties up to 15 <span style="padding-left: 35px;">properties per month.</span>
              </h5>
            
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Track the status of your <span style="padding-left: 35px;">properties</span>
              </h5>

              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Directly contact the Agents if <span style="padding-left: 35px;">you need help.</span>
              </h5>
              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Choose 3 properties to be <span style="padding-left: 35px;">posted on the front page of the</span><span style="padding-left: 35px;"> website </span>
              </h5>

              <h5>
                <span>
                  <img src="/assets/check.png" style="width:2rem;" alt="">
                </span>Relax And we'll work for you.
              </h5>

            </div>
          </div>
        </div>

        {{--  --}}
        <div class="col">
        <div class="card shadow" style="width: 20rem; height: 28rem; border-radius: 10px; border:#368D96 solid 1px;">
          <div class="card-header text-center">
              <h3>Basic Package</h3>
          </div>
          <div class="card-body word-wrap">
            <h5>
              <span>
                <img src="/assets/check.png" style="width:2rem;" alt="">
              </span>₱ 1,000 Monthly
            </h5>
              
            <h5>
              <span>
                <img src="/assets/check.png" style="width:2rem;" alt="">
              </span>Upload properties up to <span style="padding-left: 35px;">7properties and upgrade</span>
            </h5>
          
            <h5>
              <span>
                <img src="/assets/check.png" style="width:2rem;" alt="">
              </span>Track the status of your <span style="padding-left: 35px;">properties</span>
            </h5>

            <h5>
              <span>
                <img src="/assets/check.png" style="width:2rem;" alt="">
              </span>Directly contact the agents if <span style="padding-left: 35px;">you need help.</span>
            </h5>

            
            <h5>
              <span>
                <img src="/assets/check.png" style="width:2rem;" alt="">
              </span>Relax And we'll work it.
            </h5>

          </div>
        </div>
      </div>

      </div>
    </div>
 </section>
 @endsection