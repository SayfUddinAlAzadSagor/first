@extends('admin.layout.admin')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Batch Team</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('batch.create') }}"> Create New Team</a>
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
            <th>Name</th>
            <th>batch</th>
            <th>logo</th>
            <th>Description</th>
            <th>tournament ID</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->batch }}</td>
        <td>{{ $item->logo }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->tournament_id }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('batch.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('batch.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['batch.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection