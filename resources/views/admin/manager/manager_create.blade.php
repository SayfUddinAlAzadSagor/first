@extends('admin.layout.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Team</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('manager.index') }}"> Back</a>
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

    {!! Form::open(array('route' => 'manager.store','method'=>'POST','files' => true)) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Batch:</strong>
                {!! Form::text('batch', null, array('placeholder' => 'batch','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">Auction Team</label>
                 <select class="form-control" name="auctionteam_id">
                   @foreach($atems as $atem)
                     <option value="{{$atem->id}}">{{$atem->name}}</option>
                    @endforeach
                 </select>
             </div>
           </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <label class="">batch Team</label>
                 <select class="form-control" name="batchteam_id">
                   @foreach($btems as $btem)
                     <option value="{{$btem->id}}">{{$btem->name}}</option>
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