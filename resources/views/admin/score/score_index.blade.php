@extends('admin.layout.admin')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Match Score</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('score.create') }}"> Create New Team</a>
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
            <th>Team Name</th>
            <th>Mtach Played</th>
            <th>Win</th>
            <th>Draw</th>
            <th>Loss</th>
            <th>Point</th>
            <th>Tournament id</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->team }}</td>
        <td>{{ $item->mp }}</td>
        <td>{{ $item->win }}</td>
        <td>{{ $item->draw }}</td>
        <td>{{ $item->loss }}</td>
        <td>{{ $item->point }}</td>
        <td>{{ $item->tournament_id }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('score.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('score.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['score.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection