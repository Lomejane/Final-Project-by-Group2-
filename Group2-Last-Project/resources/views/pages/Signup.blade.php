@extends('layouts.app')

@section('content')
<main style="height: 80vh;">
  <br><br> <br><br>
  <div class="container">
        <div class="card" style="width: 65rem; padding: 10px;">
          <br> <br>
            <div class="row">
                <h3>Select Sign Up Type</h6> <br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus sunt repellendus at quidem odit reiciendis, facere quasi fuga voluptatem? Quas in aliquam reiciendis provident. Suscipit vel culpa aliquam dolore hic.
                <br><br>
                <div class="col">
                    <div class="btn-active">
                        <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                        <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                            <a href="/signupowner"><span>
                            <img src="/assets/hotel.png" alt="" width="80rem">
                            </span> <br>
                            <span style="font-size: 25px;">Owner</span></a>
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="btn-active">
                        <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                        <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                            <a href="/signupagent"><span>
                                <img src="/assets/house.png" alt="" width="80rem">
                            </span> <br>
                            <span style="font-size: 25px;">Owner</span></a>
                        </button>
                    </div>
                </div>
             
                <div class="col">
                    <div class="btn-active">
                        <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                        <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                            <a href="/signupagent"><span>
                                <img src="/assets/manager.png" alt="" width="80rem">
                            </span> <br>
                            <span style="font-size: 25px;">Owner</span></a>
                        </button>
                    </div>
                </div>  
                 {{--   --}}
            </div>
        </div>
    </div>
</main>

@endsection