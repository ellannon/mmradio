@extends('layout')
@section('content')
   <section>
      <div class="container-fluid">
         <div class="row w-100">
            <div class="col-xs-12 col-sm-3 col-md-3 my-auto">
               <h5>musulmanes radio - palma de mallorca</h5>
               <h1>MM Radio.es</h1>
               <h5>emisora de radio en habla hispana</h5>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 media justify-content-center">
               <img src="images/logo.png" class="playButton align-self-center img-fluid"/>
               <div id="streamer" class="w-100 d-flex align-items-center align-self-center justify-content-center">
                  <audio src="http://redradioypc.com:8028/stream" autoplay controls="true"></audio>
               </div>
            </div>
            <div class="col-xs-12 col-sm-2"></div>
         </div>
      </div>
   </section>
@endsection
