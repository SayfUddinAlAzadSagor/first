@extends('admin.layout.admin')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New Score</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('score.index') }}"> Back</a>
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

    {!! Form::model($item, ['method' => 'PATCH','route' => ['score.update', $item->id]]) !!}
   <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                 <label class="">Team Name</label>
                 <select class="form-control" name="team">
                   @foreach($tems as $tem)
                     <option value="{{$tem}}">{{$tem}}</option>
                    @endforeach
                 </select>
              </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">Match Played</label>
                 <input type="number" name="mp" max="40" min="0" placeholder="match played" class="form-control" />
             </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">Win</label>
                 <input type="number" name="win" max="40" min="0" placeholder="win" class="form-control" />
             </div>
           </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">Draw</label>
                 <input type="number" name="draw" max="40" min="0" placeholder="draw" class="form-control" />
             </div>
           </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">loss</label>
                 <input type="number" name="loss" max="40" min="0" placeholder="loss" class="form-control" />
             </div>
           </div>
           
           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">Point</label>
                 <input type="number" name="point" max="40.00" min="0.00" placeholder="point" class="form-control" step="any" />
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