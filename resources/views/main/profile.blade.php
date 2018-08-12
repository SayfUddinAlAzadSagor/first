@extends("layout.app")

@section('body')



 <div class="container-fluid">
    <div class="row-fluid">
       <div class="col-md-12  profile">
          <div class="row-fluid">
              <div class="col-md-3">
               
               <div class="col-sm-12">
                     <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12 lead"><center><a href="profile">Player Profile</a></center><hr></div>
                          </div>
                          <div class="row">
                            
                                <div class="col-md-12">
                                      <a href="/profile?s=2013-14" class="w3-bar-item w3-button">Batch: 2013-14</a><hr>
                                      <a href="/profile?s=2014-15" class="w3-bar-item w3-button">Batch: 2014-15</a><hr>
                                      <a href="/profile?s=2015-16" class="w3-bar-item w3-button">Batch: 2015-16</a><hr> 
                                      <a href="/profile?s=2016-17" class="w3-bar-item w3-button">Batch: 2016-17</a><hr>
                                      <a href="/profile?s=2017-18" class="w3-bar-item w3-button">Batch: 2017-18</a><hr>
                                </div>
                                <div class="col-md-12">
                                      <form action="{{route('profile')}}" method="get" class="form-inline">
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
              <div class="col-sm-9" id="load">
                 @forelse($pros as $pro)
                    <div class="col-sm-6">
                     <div class="panel">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12 lead"><h1 class="only-bottom-margin">{{$pro->name}}</h1><hr></div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 text-center">
                              <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
                              display:block; margin:auto;" src="{{asset('images/'.$pro->image)}}">
                            </div>
                            <div class="col-md-8">
                              <div class="row">
                                <div class="col-md-12">
                                  <h3 class="only-bottom-margin">Registration No: {{$pro->registration_no}}</h3>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-7">
                                  <span class="text-muted">Batch:</span> {{$pro->batch}}<br>
                                  <span class="text-muted">Jarsey No: </span> {{$pro->jarsey_no}}<br>
                                  <span class="text-muted">Position: </span> {{$pro->position}}
                                </div>
                                <div class="col-md-5">
                                  <div class="activity-mini">
                                    <h5>Rating</h5> 
                                  </div>
                                  <div class="activity-mini">
                                    <i class="fa fa-star-o" aria-hidden="true"></i> {{$pro->rating}}<br><br><br>
                                     <small class="text-muted">{{$pro->created_at->format('d-m-Y')}}</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                        <div class="col-md-12">
                           <hr><button class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-{{$pro->id}}"><i class="fa fa-eye" aria-hidden="true"></i>View</button>
            <!-- modal -->
        <div class="modal fade" id="modal-{{$pro->id}}">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h3 class="modal-title">{{$pro->name}}</h3>
                     </div>
                     <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4 text-center">
                              <img class="img-circle avatar avatar-original" style="-webkit-user-select:none;
                                 display:block; margin:auto;" src="{{asset('images/'.$pro->image)}}">
                            </div>
                            <div class="col-md-8">
                              <div class="row">
                                <div class="col-md-12">
                                  <h3 class="only-bottom-margin">Batch Team: {{$pro->batchteam->name}}</h3>
                                  <h3 class="only-bottom-margin">Auction Team: {{$pro->auctionteam->name}}</h3>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <span class="text-muted">About:</span> {{$pro->description}}<br>
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
    <div class="text-right">
        {{$pros->appends(['s' => $s])->links()}}
    </div>
</div> 


@endsection
