@extends('layouts.app')

@section('content')
<main style="height: 114vh;">
  <br><br> <br><br>
  <div class="container">
        <div class="card align-items-center shadow p-5" style="width: 65rem; padding: 10px; border-radius: 10px; border:#368D96 solid 1px;">
          {{-- <br> <br> --}}
            <div class="row">
                <h3>Select Sign Up Type</h6> <br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus sunt repellendus at quidem odit reiciendis, facere quasi fuga voluptatem? Quas in aliquam reiciendis provident. Suscipit vel culpa aliquam dolore hic.
                <br><br>
                <div class="col">
                    <div class="btn-active">
                        <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                        <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                            <a style="text-decoration: none;  color:  #10202B" href="/signupowner"><span>
                            <img src="/assets/businessman.png" alt="" width="80rem">
                            </span> <br>
                            <span style="font-size: 25px;">Owner</span></a>
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="btn-active">
                        <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                        <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                            <a style="text-decoration: none;  color:  #10202B" href="/signupagent"><span>
                                <img src="/assets/agent.png" alt="" width="80rem">
                            </span> <br>
                            <span style="font-size: 25px;">Agent</span></a>
                        </button>
                    </div>
                </div>
             
                <div class="col">
                    <div class="btn-active">
                        <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                        <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                            <a style="text-decoration: none;  color:  #10202B" href="/signupagent"><span>
                                <img src="/assets/admin.png" alt="" width="80rem">
                            </span> <br>
                            <span style="font-size: 25px;">Admin</span></a>
                        </button>
                    </div>
                </div>  
                 {{--   --}}
            </div>
        </div>
    </div>
    <section class="bg" style="height: 50vh;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(233, 239, 239" fill-opacity="0.7" d="M0,96L0,32L55.4,32L55.4,256L110.8,256L110.8,256L166.2,256L166.2,96L221.5,96L221.5,0L276.9,0L276.9,64L332.3,64L332.3,128L387.7,128L387.7,160L443.1,160L443.1,288L498.5,288L498.5,32L553.8,32L553.8,224L609.2,224L609.2,224L664.6,224L664.6,224L720,224L720,224L775.4,224L775.4,288L830.8,288L830.8,256L886.2,256L886.2,256L941.5,256L941.5,320L996.9,320L996.9,288L1052.3,288L1052.3,192L1107.7,192L1107.7,32L1163.1,32L1163.1,224L1218.5,224L1218.5,0L1273.8,0L1273.8,224L1329.2,224L1329.2,64L1384.6,64L1384.6,192L1440,192L1440,320L1384.6,320L1384.6,320L1329.2,320L1329.2,320L1273.8,320L1273.8,320L1218.5,320L1218.5,320L1163.1,320L1163.1,320L1107.7,320L1107.7,320L1052.3,320L1052.3,320L996.9,320L996.9,320L941.5,320L941.5,320L886.2,320L886.2,320L830.8,320L830.8,320L775.4,320L775.4,320L720,320L720,320L664.6,320L664.6,320L609.2,320L609.2,320L553.8,320L553.8,320L498.5,320L498.5,320L443.1,320L443.1,320L387.7,320L387.7,320L332.3,320L332.3,320L276.9,320L276.9,320L221.5,320L221.5,320L166.2,320L166.2,320L110.8,320L110.8,320L55.4,320L55.4,320L0,320L0,320Z"></path></svg>vg>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#368D96" fill-opacity="0.35" d="M0,256L0,96L55.4,96L55.4,256L110.8,256L110.8,288L166.2,288L166.2,32L221.5,32L221.5,192L276.9,192L276.9,128L332.3,128L332.3,288L387.7,288L387.7,64L443.1,64L443.1,320L498.5,320L498.5,256L553.8,256L553.8,288L609.2,288L609.2,192L664.6,192L664.6,224L720,224L720,256L775.4,256L775.4,32L830.8,32L830.8,288L886.2,288L886.2,0L941.5,0L941.5,96L996.9,96L996.9,0L1052.3,0L1052.3,160L1107.7,160L1107.7,32L1163.1,32L1163.1,320L1218.5,320L1218.5,64L1273.8,64L1273.8,32L1329.2,32L1329.2,32L1384.6,32L1384.6,32L1440,32L1440,320L1384.6,320L1384.6,320L1329.2,320L1329.2,320L1273.8,320L1273.8,320L1218.5,320L1218.5,320L1163.1,320L1163.1,320L1107.7,320L1107.7,320L1052.3,320L1052.3,320L996.9,320L996.9,320L941.5,320L941.5,320L886.2,320L886.2,320L830.8,320L830.8,320L775.4,320L775.4,320L720,320L720,320L664.6,320L664.6,320L609.2,320L609.2,320L553.8,320L553.8,320L498.5,320L498.5,320L443.1,320L443.1,320L387.7,320L387.7,320L332.3,320L332.3,320L276.9,320L276.9,320L221.5,320L221.5,320L166.2,320L166.2,320L110.8,320L110.8,320L55.4,320L55.4,320L0,320L0,320Z"></path></svg> --}}
    </section>
</main>

@endsection