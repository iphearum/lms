@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    @include('frontend.list_category')
    <div class="row">
    {{-- <div class="bg-blue">gg</div><br> --}}
    @foreach($data as $value)
        <div class="col-xl-2">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body" style="margin:-5px -12px -13px -12px">
                        <div class="row" style="margin:0px -17px -20px -17px;">
                            <div class="col" style="height:250px">
                                <a href="{{ route('view.show', $value->id) }}">
                                    <img src="{{ URL::to('/') }}/images/{{ $value->image }}" style="width:100%;height:100%;border-radius:5px;border:1px solid #eee"/>
                                </a>
                            </div>
                        </div>
                        <p class="mt-4 mb-0 text-sm">
                            <span class="text-nowrap">{{$value->name}}</span><br/>
                            <span class="text-success"></i> {{$value->auth}}</span>
                        </p>
                    </div>
                </div>
            </div>
    @endforeach
</div>
<div class="text-center" style="transform:translate(40%,0)">
{!! $data->links() !!}
</div>
@endsection