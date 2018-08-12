@extends('admin.layout.admin')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Match Schedule</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('schedule.create') }}"> Create New Team</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>1st Team</th>
            <th>2st Team</th>
            <th>1st Team Goal</th>
            <th>2st Team Goal</th>
            <th>Datetime</th>
            <th>played/not-played</th>
            <th>Description</th>
            <th>Tournament id</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->team_1 }}</td>
        <td>{{ $item->team_2 }}</td>
        <td>{{ $item->goal_1 }}</td>
        <td>{{ $item->goal_2 }}</td>
        <td>{{ $item->datetime }}</td>
        <td>{{ $item->check }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->tournament_id }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('schedule.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('schedule.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['schedule.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection