@extends('layouts.app')


@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <style>

    .row{
        background: white;

    }
    .deleteedit{
        width: 100%;
        margin-bottom: 20px;
        margin-right: 20px;
    }
    .mid{
        margin-top: 20px;
    }


    </style>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="left">
                    <img src="{{asset($stationary->image)}}" alt="" class="image" style="width: 100%">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="mid">
                    <h6>Stationary Name : {{$stationary->name}}</h6>
                    <h6>Stationary Price : Rp. {{number_format($stationary->price)}}</h6>
                    <h6>Stationary Stock : {{$stationary->stock}}</h6>
                    <h6>Stationary Type : {{$stationary->type_id}}</h6>
                    <h6>Description : {{$stationary->description}}</h6>
                </div>
            </div>
            <div class="deleteedit text-right">
                @if(Auth::user()->is_admin == 1)
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="{{route('edit', $stationary->id)}}" class="btn btn-primary">Edit</a>
{{--                    <button type="button" class="btn btn-danger">Delete</button>--}}
{{--                    <button type="button" class="btn btn-primary">Edit</button>--}}
                @elseif(Auth::user()->is_admin == 0)
                    <input type="number" min="1" max="{{$stationary->stock}}" value="1">
                    <a href="#" class="btn btn-dark">Add to Cart</a>
                @endif
            </div>
        </div>
    </div>



@endsection
