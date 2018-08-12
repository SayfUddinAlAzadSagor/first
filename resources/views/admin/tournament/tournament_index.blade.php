@extends('admin.layout.admin')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tournament</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tournament.create') }}"> Create New Tournament</a>
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
            <th>Tournament Id</th>
            <th>Name</th>
            <th>Session</th>
            <th>Auction/Batch</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{$item->id}}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->session }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->description }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('tournament.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('tournament.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['tournament.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection