@extends('layouts.app')


@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <style>
        .paginate{
            margin-left: 30px;
        }
    </style>

    <div class="container">
        <div class="row">
            @if($product->isNotEmpty())
                @foreach($product as $prod)
                    <div class="col-sm-4">
                        <div class="card" style="width: 300px">
                            <img src="{{asset($prod->image)}}" alt="" class="image" style="width: 100%">
                            <div class="card-body">
                                <a href="#" class="card-link">{{$prod->name}}</a>
                                <p class="card-text">{{$prod->description}}</p>
                                {{--                    <a href="{{route('', $prod->id)}}}" class="btn btn-primary">See Product</a>--}}
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
            @else
                <div class="notfound">
                    There is no product match with the keyword.
                </div>
            @endif
            <div class="paginate">
                {{$product->links()}}
            </div>
        </div>
    </div>




@endsection
