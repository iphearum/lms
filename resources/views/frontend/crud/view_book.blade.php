@extends('layouts.app')

@section('content')
<div class="container">
	<div style="text-align:right; padding:10px 0px">
			<a href="{{ route('book.index') }}" class="btn btn-primary">Back</a>
		</div>
		<div class="jumbotron text-center">
			<div class="row">
				<div class="col-3">
					<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-fluid rounded"/>
				</div>
				<div class="col-9">
					<div style="text-align:left">
						<h3>Name~{{ $data->name }} </h3>
						<h3>Author~{{ $data->auth }}</h3>
					</div>
					<div class="text-left">
						<p>{{$data->description}}</p>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus minima, illo alias consequuntur exercitationem eum nobis accusamus. Pariatur eveniet voluptatum corporis excepturi ea amet quas atque quia, ab officia quos Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias nemo vel repudiandae quas nobis incidunt perferendis explicabo dolor, laborum impedit a maxime placeat officia. Ex animi ab ipsum voluptatem amet.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus minima, illo alias consequuntur exercitationem eum nobis accusamus. Pariatur eveniet voluptatum corporis excepturi ea amet quas atque quia, ab officia quos Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias nemo vel repudiandae quas nobis incidunt perferendis explicabo dolor, laborum impedit a maxime placeat officia. Ex animi ab ipsum voluptatem amet.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus minima, illo alias consequuntur exercitationem eum nobis accusamus. Pariatur eveniet voluptatum corporis excepturi ea amet quas atque quia, ab officia quos Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias nemo vel repudiandae quas nobis incidunt perferendis explicabo dolor, laborum impedit a maxime placeat officia. Ex animi ab ipsum voluptatem amet.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus minima, illo alias consequuntur exercitationem eum nobis accusamus. Pariatur eveniet voluptatum corporis excepturi ea amet quas atque quia, ab officia quos Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias nemo vel repudiandae quas nobis incidunt perferendis explicabo dolor, laborum impedit a maxime placeat officia. Ex animi ab ipsum voluptatem amet.</p>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection
