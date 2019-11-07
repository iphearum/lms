<form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">
	@csrf
	<div>
		<label for="">Description</label><br/>
		<input type="text" name="text" class="form-control input-lg"/>
	</div>
	<button type="submit" class="btn btn-primary input-lg">Add</button>
</form>



