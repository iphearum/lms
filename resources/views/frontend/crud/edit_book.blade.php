@extends('layouts.app')

@section('content')
<div align="right">
	<a href="{{ route('book.index') }}" class="btn btn-sm btn-primary">Back</a>
</div><br/>
<form method="post" action="{{ route('book.update', $data->id) }}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<div class="row">
		<div class="col-5">
			<div class="col-md-8">
				<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-fluid rounded"/>
				<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
				<input type="file" name="image" class="btn btn-light"/>
			</div>
		</div>
		<div class="col-7">
			<div style="text-align:left">
				<div style="text-align:left">
					<label for="">Name book</label><br/>
					<input type="text" value="{{ $data->name }}" name="name" class="form-control input-lg" />
					<label for="">Auth book</label><br/>
					<input type="text" value="{{ $data->auth }}" name="auth" class="form-control input-lg" />
					<label for="">Identification</label><br/>
					<input type="text" value="{{ $data->identifier }}" name="identifier" class="form-control input-lg" />
					<label for="">Sex</label><br/>
					<input type="text" value="{{ $data->sex }}" name="sex" class="form-control input-lg" />
					<label for="">Category</label><br/>
					<input type="text" value="{{ $data->category }}" name="category" class="form-control input-lg" />
					<label for="">Status</label><br/>
					<input type="text" value="{{ $data->status }}" name="status" class="form-control input-lg" />
					<label for="">Date</label><br/>
					<input type="date" name="date" value="{{$data->date}}" class="form-control input-lg" />
					<label for="">Description</label><br/>
					<input type="text" value="{{ $data->description }}" name="description" class="form-control input-lg" />
				</div><br>
				<button type="submit" class="btn btn-primary input-lg">Add</button>
			</div>
		</div>
	</div>
</form>
@endsection



