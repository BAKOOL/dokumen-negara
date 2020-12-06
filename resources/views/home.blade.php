@extends('layouts.app')


@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
<body>
<div class="row">
    @foreach($product as $prod)
        <div class="col-sm-4">
            <div class="card" style="width: 300px">
                <img src="{{asset($prod->image)}}" alt="" class="image" style="width: 100%">
                <div class="card-body">
                    <h4 class="card-title">{{$prod->name}}</h4>
                    <p class="card-text">{{$prod->description}}</p>
{{--                    <a href="{{route('', $prod->id)}}}" class="btn btn-primary">See Product</a>--}}
                </div>
            </div>
        </div>
    @endforeach
    <div class="paginate">
        {{$product->links()}}
    </div>
</div>
</body>


@endsection

