@extends('admin.layout.admin')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Match Score</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('score.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Team Name:</strong>
                {{ $item->team }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Match Played:</strong>
                {{ $item->mp }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Win:</strong>
                {{ $item->win }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Draw:</strong>
                {{ $item->draw }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Loss:</strong>
                {{ $item->loss }}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Played/not-played:</strong>
                {{ $item->point }}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tournament id:</strong>
                {{ $item->tournament_id }}
            </div>
        </div>

    </div>

@endsection