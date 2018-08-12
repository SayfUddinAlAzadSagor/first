@extends("layout.app")

@section('body')
<!-- teamdetails -->
	<div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-12  profile">
          <div class="row-fluid">

            <div class="col-md-3">
              <div class="col-sm-12">
                 <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 lead"><center><a href="teams">{{$atems->name}}</a></center><hr></div>
                        </div>
                         <div class="row">
                            <div class="col-md-12 text-center">
                              <img class="img-square avatar avatar-original" style="-webkit-user-select:none; 
                              display:block; margin:auto;" src="{{asset('images/'.$atems->logo)}}">
                            </div>
                          </div>
                        <div class="row">           
                            <div class="col-md-12">
                                 <hr>
                                <a href="/auction" class="w3-bar-item w3-button">Auction Teams</a><hr>
                                <a href="/batch" class="w3-bar-item w3-button">Batch Teams</a><hr>
                            </div>
                            <div class="col-md-12">
                                <form action="{{route('teams')}}" method="get" class="form-inline">
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

           <div class="col-md-6">
               <div class="row">
                  <div class="col-md-12 lead"><center><h3 class="only-bottom-margin">Team Member</h3></center><hr><hr>
                  </div>
                </div>
                 @forelse($atems->profiles as $pro)
                   <div class="col-sm-4">
                     <div class="panel">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12 text-center">
                              <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
                              display:block; margin:auto;" src="{{asset('images/'.$pro->image)}}">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 lead"><center><small class="only-bottom-margin">{{$pro->name}}::</small</center></div>
                              <div class="col-md-8 lead"><center><small class="only-bottom-margin">{{$pro->position}}</small</center></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @empty
                  <h5> <center>no profile</center> </h5>
                 @endforelse                        
            </div>

            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 lead"><center><h3 class="only-bottom-margin">Manager</h3></center><hr><hr>
                    </div>
                </div>
                @forelse($atems->managers as $man)
                   <div class="col-sm-12">
                     <div class="panel">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12 text-center">
                              <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
                              display:block; margin:auto;" src="{{asset('images/'.$man->image)}}">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 lead"><center><small class="only-bottom-margin">{{$man->name}}::</small</center></div>
                              <div class="col-md-6 lead"><center><small class="only-bottom-margin"> {{$man->batch}}</small</center></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @empty
                  <h5> <center>manager not assigned</center></h5>
                @endforelse  
                <div class="row">
                    <div class="col-md-12 lead"><center><br><br><br><h3 class="only-bottom-margin">About Team</h3></center><hr>
                    </div>
                    <div><h5><center>{{$atems->description}}</center></h5></div>
                </div>
            </div>

        </div>
      </div>
    </div>
 </div>
<!-- //teamdetails -->
		
@endsection
		