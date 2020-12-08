@extends('layouts.app')


@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-between">
            @foreach($product as $prod)
                <div class="col-sm-4">
                    <div class="card" style="width: 300px">
                        <img src="{{asset($prod->image)}}" alt="" class="image" style="width: 100%">
                        <div class="card-body">
                            <a href="#" class="card-link">{{$prod->name}}</a>
                            <p class="card-text">{{$prod->description}}</p>
                        </div>
                    </div>
                    <br>
                </div>
    @endforeach
                <div class="paginate">
                    {{$product->links()}}
                </div>
    </div>


@endsection

