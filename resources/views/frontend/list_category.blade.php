<div>
    <ul>
        @foreach ($category as $item)
            <a href="{{ route('bycategory', $item->id) }}"><li>{{$item->name}}</li></a>
        @endforeach
    </ul>
</div>