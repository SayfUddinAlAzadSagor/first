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
                            <div class="col-md-12 lead"><center><a href="/tournament">Tournaments</a></center><hr></div>
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
              @if($ids != null)
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-md-12 lead"><h1 class="only-bottom-margin"><center>{{$ids->name}}</center></h1><hr></div>
                </div>
                <div class="col-md-12">
                  <div class="col-sm-7">
                    <div class="panel">
                      <div class="panel-body">
                         <div class="col-sm-12"><center>Schedule</center></div><hr>
                         <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Date And Time</th>
                              <th scope="col">Team</th>
                              <th scope="col">Results</th>
                              <th scope="col">view</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($ids->schedules as  $key =>$id)
                            <tr>
                            <th scope="row">{{++$i}}</th>                            
                              <td>{{$id->datetime}}</td>
                              <td>{{$id->team_1}} vs {{$id->team_2}}</td>
                              @if($id->check == 1)
                              <td>{{$id->goal_1}}-{{$id->goal_2}}</td>
                              @else
                              <td>not yet played</td>
                               <td class="fa fa-eye" aria-hidden="true"></td>
                              @endif
                            </tr>
                            @empty
                          @endforelse
                            
                          </tbody>
                        </table>
                          
                      </div>
                    </div>
                  </div>
                   <?php $i=0; ?>
                  <div class="col-sm-5">
                    <div class="panel">
                      <div class="panel-body">  
                        <div class="col-sm-12"><center>Points Table</center></div><hr>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Team</th>
                              <th scope="col">MP</th>
                              <th scope="col">W</th>
                              <th scope="col">D</th>
                              <th scope="col">L</th>
                              <th scope="col">Pts</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($ids->scores as  $key =>$id)
                            <tr>
                            <th scope="row">{{++$i}}</th>                            
                              <td>{{$id->team}}</td>
                              <td>{{$id->mp}}</td>
                               <td>{{$id->win}}</td>
                              <td>{{$id->draw}}</td>
                               <td>{{$id->loss}}</td>
                              <td>{{$id->point}}</td>
                            </tr>
                            @empty
                          @endforelse
                            
                          </tbody>
                        </table>
                        <div class="row">
                           <div class="col-md-12 lead"><center><br><br><br><h5 class="only-bottom-margin">About Tournament</h5></center><hr>
                           </div>
                           <div><h6><center>{{$trmt->description}}</center></h6></div>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>                     
              </div>
              @endif
              
           </div>
        </div>
    </div>
    <div class="text-right">
        {{$trmts->appends(['s' => $s])->links()}}
    </div>
</div> 


@endsection
