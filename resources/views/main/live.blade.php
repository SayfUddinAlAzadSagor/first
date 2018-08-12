@extends("layout.app")

@section('body')
<!-- teamdetails -->
<div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-12  profile">
          <div class="row-fluid">
            <div class="col-md-12">
              
              <div class="col-md-3">
                  <div class="col-sm-12">
                     <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12 lead"><center><a href="/live">last Live</a></center><hr></div>
                          </div>
                          <div class="row">
                              @forelse($livs as $liv)
                                <div class="col-md-12">
                                      <a href="/live/{{$liv->id}}" class="w3-bar-item w3-button">{{$liv->team_1}} vs {{$liv->team_2}}</a><hr>
                                </div>
                                @empty
                              <h2> <center>no live avaible</center> </h2>
                              @endforelse
                                <div class="col-md-12">
                                      <form action="{{route('tournament')}}" method="get" class="form-inline">
                                        <div class="form-group">
                                            <input type="text" name="s" placeholder="keyword">
                                            <div class="form-group">
                                               <button class="btn-btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button> 
                                            </div>                                           
                                        </div>                                      
                                      </form>
                                </div>  
                           </div>
                        </div>
                      </div>
                   </div>
              </div>
              <div class="col-md-9">
                <div class="row">
                @forelse($livs as $liv)
                  <div class="col-md-6">
                    <div class="col-sm-12">
                      <div class="panel panel-default">
                       <div class="panel-body">

                         <div class="row">
                           <div class="col-md-6">
                              <h3><center>{{$liv->team_1}}</center></h3>
                              <img class="img-square avatar avatar-original" style="-webkit-user-select:none; 
                                display:block; margin:auto; max-width: 50px; max-height: 50px;" src="{{asset('images/'.$liv->logo_1)}}"><hr>
                            </div>
                            <div class="col-md-6">
                              <h3><center>{{$liv->team_2}}</center></h3>
                              <img class="img-square avatar avatar-original" style="-webkit-user-select:none; 
                                display:block; margin:auto; max-width: 50px; max-height: 50px;" src="{{asset('images/'.$liv->logo_2)}}"><hr>
                            </div>
                         </div>

                         <div class="row">
                           <div class="col-md-6">
                             <h1 style="font-size: 75px;
                               color: #008000;"><center>{{$liv->goal_1}}</center></h1>
                           </div>
                           <div class="col-md-6">
                             <div class="col-md-6">
                              <h1 style="font-size: 75px;
                               color: #008000;"><center>{{$liv->goal_2}}</center></h1>
                             </div>
                           </div>
                         </div>

                         <div class="row">
                           <div class="col-md-12">
                             <br>
                             <h3 style="color: #009000">
                              <center>
                                <table>
                                 <tr>
                                  <td style="color: #FF0000">Time Left&nbsp</td>
                                  <td id="days"></td>
                                  <td> : </td>
                                  <td id="hours"></td>
                                  <td> : </td>
                                  <td id="minutes"></td>
                                  <td> : </td>
                                  <td id="seconds"></td>
                                 </tr>
                                </table>
                                <script>cdtd();</script>
                             </center>
                            </h3>
                         <script>
                            function cdtd() {
                              var curr = new Date('{{$liv->timeleft}}');
                              var now = new Date();
                              var timeDiff = curr.getTime() - now.getTime();
                              
                              var seconds = Math.floor(timeDiff / 1000);
                              var minutes = Math.floor(seconds / 60);
                              var hours = Math.floor(minutes / 60);
                              var days = Math.floor(hours / 24);
                              hours %= 24;
                                    minutes %= 60;
                                    seconds %= 60;
                              document.getElementById("days").innerHTML = days;
                              document.getElementById("hours").innerHTML = hours;
                              document.getElementById("minutes").innerHTML = minutes;
                              document.getElementById("seconds").innerHTML = seconds;
                              var timer = setTimeout('cdtd()',1000);
                            }
                            </script>
                           </div>
                        </div>

                      </div>
                     </div>
                   </div> 
                  </div>

                  <div class="col-md-6">
                    <div class="col-sm-12">
                      <div class="panel panel-default">
                       <div class="panel-body">
                         <iframe width="450" height="315" src="{{$liv->stream}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                      </div>          
                     </div>
                   </div> 
                  </div>
                @empty
                <h5> <center>no live</center> </h5>
                @endforelse
              </div>              
             </div>
              {{$livs->links()}}
            </div> 
          </div>
       </div>
    </div>
</div>
    
<!-- //teamdetails -->
		
@endsection
		