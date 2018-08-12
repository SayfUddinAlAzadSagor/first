@extends('admin.layout.admin')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Match Score</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('live.create') }}"> Create New Team</a>
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
            <th>1st Team Name</th>
            <th>2nd Team Name</th>
            <th>1st Team Goal</th>
            <th>2nd Team Goal</th>
            <th>1st Team logo</th>
            <th>2nd Team logo</th>
            <th>Time Left</th>
            <th>stream</th>
            <th>Description_1</th>
            <th>Description_2</th>
            
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->team_1 }}</td>
        <td>{{ $item->team_2 }}</td>
        <td>{{ $item->goal_1 }}</td>
        <td>{{ $item->goal_2 }}</td>
        <td>{{ $item->logo_1 }}</td>
        <td>{{ $item->logo_2 }}</td>
        <td>{{ $item->timeleft }}</td>
        <td>{{ $item->stream }}</td>
        <td>{{ $item->description_1 }}</td>
        <td>{{ $item->description_2 }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('live.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('live.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['live.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection