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
                            <div class="col-md-12 lead"><center><a href="/live">Tournaments</a></center><hr></div>
                          </div>
                          <div class="row">
                              @forelse($trmts as $trmt)
                                <div class="col-md-12">
                                      <a href="/tournament/{{$trmt->id}}" class="w3-bar-item w3-button">{{$trmt->name}}</a><hr>
                                </div>
                                @empty
                              <h2> <center>no tornament avaible</center> </h2>
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
                  <center><h4>IICT Football Tournament 2017</h4></center><br>              
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
                               color: #008000;"><center>5</center></h1>
                           </div>
                           <div class="col-md-6">
                             <div class="col-md-6">
                              <h1 style="font-size: 75px;
                               color: #008000;"><center>5</center></h1>
                             </div>
                           </div>
                         </div>

                         <div class="row">
                           <div class="col-md-12">
                             <br><h3 style="color: #FF0000"><center>Time Left: {{$liv->timeleft}}</center></h3>
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
                         <iframe width="450" height="315" src="https://www.youtube.com/embed/WIQJcTnCypw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                      </div>          
                     </div>
                   </div> 
                  </div>
                @empty
                <h5> <center>no live</center> </h5>
                @endforelse
              </div>              
             </div>
  
            </div> 
          </div>
       </div>
    </div>
</div>
    
<!-- //teamdetails -->
		
@endsection
		