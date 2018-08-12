@extends('layout.app')

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
                              <form action="{{route('auction')}}" method="get" class="form-inline">
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
                    <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12 lead"><h3 class="only-bottom-margin">{{$atem->name}}</h3><hr></div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 text-center">
                              <img class="img-squre avatar avatar-original" style="-webkit-user-select:none; 
                              display:block; margin:auto;" src="{{asset('images/'.$atem->logo)}}">
                            </div>
                            <div class="col-md-6">
                              <h3 class="only-bottom-margin">Manager:</h3>
                              @if ($atem->managers->count() > 0)
                              @foreach($atem->managers as $man)
                              <div class="row">
                                <div class="col-md-12">
                                  <a href="#" data-toggle="modal" data-target="#modal-{{$man->id}}"><small class="only-bottom-margin">{{$man->name}}</small></a>
                                </div>
                              </div>
                               <!-- modal -->
                                    <div class="modal fade" id="modal-{{$man->id}}">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                 <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                       <h3 class="modal-title">{{$man->name}}</h3>
                                                 </div>
                                                 <div class="modal-body">
                                                      <div class="row">
                                                        <div class="col-md-4 text-center">
                                                          <img class="img-circle avatar avatar-original" style="-webkit-user-select:none;
                                                             display:block; margin:auto;" src="{{asset('images/'.$man->image)}}">
                                                        </div>
                                                        <div class="col-md-8">
                                                          <!-- <div class="row">
                                                            <div class="col-md-12">
                                                              <h3 class="only-bottom-margin">Batch Team: {{$man->name}}</h3>
                                                              <h3 class="only-bottom-margin">Auction Team: {{$man->name}}</h3>
                                                            </div>
                                                          </div> -->
                                                          <div class="row">
                                                            <div class="col-md-12">
                                                              <span class="text-muted">About:</span> {{$man->description}}<br>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                 </div>
                                                 <div class="modal-footer">
                                                    <a href="" class="btn btn-default" data-dismiss="modal">Close</a>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>                                
                            <!-- modalend -->
                              @endforeach
                              @else
                                <small class="only-bottom-margin">manager not assign</small>
                                @endif
                            </div>
                          </div>
                        <div class="row">
                         <div class="col-md-12">
                           <hr><a  href="auction/{{$atem->id}}" class="btn btn-default pull-right"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
    <!-- match -->

@endsection