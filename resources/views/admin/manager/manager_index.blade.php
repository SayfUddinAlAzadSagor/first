@extends('admin.layout.admin')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manager</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('manager.create') }}"> Create New Manager</a>
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
            <th>Batch</th>
            <th>Image</th>
            <th>Description</th>
            <th>Auction Team</th>
            <th>Batch Team</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->batch }}</td>
        <td>{{ $item->image }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->auctionteam->name }}</td>
        <td>{{ $item->batchteam->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('manager.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('manager.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['manager.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection