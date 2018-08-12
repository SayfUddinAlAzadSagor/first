@extends('admin.layout.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Match Schedule</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('schedule.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'schedule.store','method'=>'POST')) !!}
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                 <label class="">1st Team</label>
                 <select class="form-control" name="team_1">
                   @foreach($tems as $tem)
                     <option value="{{$tem}}">{{$tem}}</option>
                    @endforeach
                 </select>
              </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">2st Team</label>
                 <select class="form-control" name="team_2">
                   @foreach($tems as $tem)
                     <option value="{{$tem}}">{{$tem}}</option>
                    @endforeach
                 </select>
             </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>1st team Goal:</strong>
                <input type="number" name="goal_1" max="30" min="0" placeholder="goal" class="form-control" />
             </div>
           </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>2st team Goal:</strong>
               <input type="number" name="goal_2" max="30" min="0" placeholder="goal" class="form-control" />
             </div>
           </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>datetime:</strong>
                <input type="text" name="datetime" id="datetimepicker" class="form-control" placeholder="datetime" />
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
             <strong>played/not-played:</strong>
            <div class="form-group">
              <select class="form-control" name="check">
                  <option value="1">played</option>
                  <option value="0">not-played</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Description:</strong>
                {!! Form::text('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">Tornament</label>
                 <select class="form-control" name="tournament_id">
                   @foreach($ttids as $ttid)
                     <option value="{{$ttid->id}}">{{$ttid->name}}</option>
                    @endforeach
                 </select>
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection