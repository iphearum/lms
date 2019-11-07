@extends('layouts.app')
@section('content')
<div>
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  <table class="table">
  <div><a href="{{route('index')}}" class="btn btn-primary btn-sm float-left">Back</a></div>
  <div><a href="{{route('book.create')}}" class="btn btn-facebook btn-sm float-right">Add</a></div>
  <br>
  <span style="padding:10px; margin:10px;"></span>
      <thead>
        <tr class="shadow-lg p-3 mb-5 bg-white rounded">
          <th scope="col" style="width:10%">N</th>
          <th scope="col" style="width:20%">Name</th>
          <th scope="col" style="width:20%">Author</th>
          <th scope="col" style="width:20%">Category</th>
          {{-- <th scope="col" style="width:20%">Book Image</th> --}}
          <th scope="col" style="text-align:center; width:30%">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $value)
        <tr class="shadow bg-white rounded">
        <td scope="row">{{$value->id}}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->auth }}</td>
          <td>{{ $value->category }}</td>
          {{-- <td>
            <img src="{{ URL::to('/') }}/images/{{ $value->image }}" class="img-thumbnail" style="height:30px; width:100%;"/>
          </td> --}}
          <td style="text-align:center">
            @role('owner')
            <a href="{{ route('book.show', $value->id) }}" class="btn btn-primary btn-sm">View</a>
            <a href="{{ route('book.edit', $value->id) }}" class="btn btn-warning btn-sm">Update</a>
            @else
            @role('admin')
            <form action="{{ route('book.destroy', $value->id) }}" method="post">
              <a href="{{ route('book.show', $value->id) }}" class="btn btn-primary btn-sm">View</a>
              <a href="{{ route('book.edit', $value->id) }}" class="btn btn-warning btn-sm">Update</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            @else
            @endrole
            @endrole
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="float-right">
      {!! $data->links() !!}
    </div>
</div>
@endsection