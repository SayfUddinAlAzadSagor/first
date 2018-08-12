
@extends('admin.layout.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Match Live</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('live.index') }}"> Back</a>
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

    {!! Form::open(array('route' => 'live.store','method'=>'POST')) !!}
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                 <label class="">1st Team Name</label>
                 <select class="form-control" name="team_1">
                   @foreach($tems as $tem)
                     <option value="{{$tem->name}}">{{$tem->name}}</option>
                    @endforeach
                 </select>
              </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                 <label class="">2nd Team Name</label>
                 <select class="form-control" name="team_2">
                   @foreach($tems as $tem)
                     <option value="{{$tem->name}}">{{$tem->name}}</option>
                    @endforeach
                 </select>
              </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">1st Team Goal</label>
                 <input type="number" name="goal_1" max="40.00" min="0.00" placeholder="goal" class="form-control" step="any" />
             </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">2nd Team Goal</label>
                 <input type="number" name="goal_2" max="40.00" min="0.00" placeholder="goal" class="form-control" step="any" />
             </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                 <label class="">1st Team Logo</label>
                 <select class="form-control" name="logo_1">
                   @foreach($tems as $tem)
                     <option value="{{$tem->logo}}">{{$tem->name}}</option>
                    @endforeach
                 </select>
              </div>
           </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                 <label class="">2nd Team Logo</label>
                 <select class="form-control" name="logo_2">
                   @foreach($tems as $tem)
                     <option value="{{$tem->logo}}">{{$tem->name}}</option>
                    @endforeach
                 </select>
              </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">Time Left</label>
                  <input type="text" name="timeleft" id="datetimepicker" class="form-control" placeholder="timeleft" />
             </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Url Streaming:</strong>
                {!! Form::text('stream', null, array('placeholder' => 'url','class' => 'form-control')) !!}
            </div>
           </div>
           
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description_1:</strong>
                {!! Form::textarea('description_1', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description_2:</strong>
                {!! Form::textarea('description_2', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
          </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection