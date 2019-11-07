@extends('layouts.app')
@section('content')
<div class="container">
@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div align="right">
		<a href="/book" class="btn btn-sm btn-primary">Back</a>
	</div><br/>
	<form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col">
				<div class="col-md-8">
					<input type="file" name="image" class="btn btn-light"/>
					{{-- <input type="text" name="image" class="form-control input-lg"> --}}
				</div>
			</div>
			<div class="col">
				<div style="text-align:left">
					<label for="">Name book</label><br/>
					<input type="text" name="name" class="form-control input-lg" />
					<label for="">Auth book</label><br/>
					<input type="text" name="auth" class="form-control input-lg" />
					<label for="">Identification</label><br/>
					<input type="text" name="identifier" class="form-control input-lg" />
					<label for="">Sex</label><br/>
					<input type="text" name="sex" class="form-control input-lg" />
					<label for="">Category</label><br/>
					<select name="category_id" style="width:102%;height:40px;margin-left:-5px">
						@foreach ($category as $item)
							<option value="{{$item->id}}">{{$item->name}}</option>
						@endforeach
					</select>
					<label for="">Status</label><br/>
					<select name="status" style="width:102%;height:40px;margin-left:-5px">
						<option value="This is a new book for you">This is a new book for you</option>
						<option value="New book is arrived">New book is arrived</option>
					</select>
					<label for="">Date</label><br/>
					<input type="date" name="date" class="form-control input-lg" />
					<label for="">Description</label><br/>
					<input type="text" name="description" class="form-control input-lg" />
					<label for="">Stock</label><br/>
					<input type="text" name="stocks" class="form-control input-lg" />
				</div><br>
				{{-- <input type="submit" class="btn btn-primary input-lg" value="Add" /> --}}
				<button type="submit" class="btn btn-primary input-lg">Add</button>
			</div>
		</div>
	</form>

@endsection



