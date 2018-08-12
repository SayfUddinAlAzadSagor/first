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

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>1st Team:</strong>
                {{ $item->team_1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>2st Team:</strong>
                {{ $item->team_2 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>1st Team Goal:</strong>
                {{ $item->goal_1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>2st Team Goal:</strong>
                {{ $item->goal_2 }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Datetime:</strong>
                {{ $item->datetime }}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Played/not-played:</strong>
                {{ $item->check }}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                {{ $item->description }}
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