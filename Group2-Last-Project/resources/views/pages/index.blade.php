<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'Default Value')}}</title>
    <link href="{{('/assets/app.css')}}" rel="stylesheet">
  

  </head>
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    background-color: #FAD9C1;
  }

.HouseHero img {
    margin-top: 3%;
    height: 60vh;
    width: 45vw;
    border: solid black 1px;
    border-top-left-radius: 190%;
    border-top-right-radius: 190%;
    border-bottom-left-radius: 0;
  }
  
  </style>
  <body>
    @extends('pages.Navbar')

    @section('content')
        
    
        <main>
          <div class="container text-center">
              <!-- Stack the columns on mobile by making one full-width and the other half-width -->
              <div class="row">
                  <div class="col-6 col-md-4">
                    <div className="Hero-Subtitle">
                      <h3>The best platform to <br />Buy and Sell properties</h3> 
                      <p>See properties that might pique your interests</p>
                      <button className='ExploreBtn'>EXPLORE</button>
                    </div>   
                  </div>
                  <br>
                  <div class="col-md-8">
                      <div class="HouseHero">
                          <img src="/assets/HouseHero.jpg" alt="House Property">
                      </div>
                  </div>
               
              </div>
        </main>
        @endsection

 </body> 
 </html>