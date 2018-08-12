@extends("layout.app")

@section('body')
<!-- match -->
		 <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-12  profile">
          <div class="row-fluid">
            <div class="col-md-3">
              <div class="col-sm-12">
                 <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 lead"><center><a href="teams">Teams</a></center><hr></div>
                        </div>
                        <div class="row">           
                            <div class="col-md-12">
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
             <div class="col-sm-9">
                <div class="row">
                    <div class="col-md-12 lead"><center><h1 class="only-bottom-margin">Auction Team</h1></center><hr>
                    </div>
                </div>
                 @forelse($atems as $atem)
                 <a style="display:block" href="auction/{{$atem->id}}">
                    <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12 lead"><h3 class="only-bottom-margin">{{$atem->name}}</h3><hr></div>
                          </div>
                          <small class="text-muted"><center>Created at: {{$atem->created_at->format('d-m-Y')}}</center></small>
                        </div>
                      </div>
                    </div>
                    </a>
                    @empty
                  <h2> <center>no profile</center> </h2>
                 @endforelse                        
                <div class="row">
                    <div class="col-md-12 lead"><center><h1 class="only-bottom-margin">Batch Team</h1></center><hr>
                    </div>
                </div>
                 @forelse($btems as $btem)
                  <a style="display:block" href="batch/{{$btem->id}}">
                    <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12 lead"><h3 class="only-bottom-margin">{{$btem->name}}</h3><hr></div>
                          </div>
                          <small class="text-muted"><center>Batch : {{$btem->batch}}</center></small>
                        </div>
                      </div>
                    </div>
                   </a> 
                    @empty
                  <h2> <center>no profile</center> </h2>
                 @endforelse                        
              </div>

           </div>
        </div>
    </div>
    </div>
    <div class="text-right">
        {{$atems->links()}}
    </div>
</div> 
		<!-- //match -->
		
@endsection
		