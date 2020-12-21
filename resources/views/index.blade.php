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
            @if($stationary->isNotEmpty())
                @foreach($stationary as $stat)
                    <div class="col-sm-4">
                        <div class="card" style="width: 300px">
                            <img src="{{asset($stat->image)}}" alt="" class="image" style="width: 100%">
                            <div class="card-body">
                                <a href="{{route('detailproduct', $stat->id)}}" class="card-link">{{$stat->name}}</a>
                                <p class="card-text">{{$stat->description}}</p>
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
        </div>
        <div class="paginate">
            {{$stationary->links()}}
        </div>
    </div>




@endsection
