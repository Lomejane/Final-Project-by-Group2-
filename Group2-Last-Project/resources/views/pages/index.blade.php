<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'Default Value')}}</title>
    <link href="{{('/assets/app.css')}}" rel="stylesheet">
    <link href="{{('/assets/index.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    

  </head>
  <style>
    /* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Po
  }
  
  body {
    /* background-color: #c1cefa; */
    /* height: 700vh;
  } */ */
/* 
  #Home{
    min-height: 65vh;
  background-color: #09141d;
  } */

/* .HouseHero img {
    margin-top: 3%;
    height: 60vh;
    width: 40vw;
    border: solid black 1px;
    border-top-left-radius: 190%;
    border-top-right-radius: 190%;
    border-bottom-left-radius: 0;
  } */

  </style>
  <body>
    @extends('layout.Navbar')

    @section('content')
        
    
        <main>
          <div id="Home">
            <div class="container">
              <!-- Stack the columns on mobile by making one full-width and the other half-width -->
              <div class="row">
                <div class="col-6 col-md-4 d-flex mt-4">
                  <div className="Hero-Subtitle" style="padding-top:60px; border: red 1px solid;">
                    <h3 style="  font-size: 46px; color: #fff; font-family: 'Poppins', sans-serif;">
                    The best platform <br>to Buy and Sell properties</h3> <br>
                    <p style="font-size: 25px; color: white; font-family: 'Roboto Condensed', sans-serif;">
                    See properties that might <br> pique your interests</p>
                    <button type="button" class="btn btn-dark btn-lg" style="font-family:'Poppins', sans-serif; width:10rem;">Explore</button>
                  </div>   
                </div>
              
                <div class="col-md-8" style=" border: red 1px solid;">
                  <div class="HouseHero">
                    <img src="/assets/HouseHero.jpg" alt="House Property">
                  </div>
                </div>
            </div>
          </div>
          <br> <br>
          <section id="Search Container">
            <div class="card w-50vw" style="background-color;">
              <div class="card-body">
                This is some text within a card body.
              </div>
            </div>
          </section>
        </main>
        @endsection

 </body> 
 </html>