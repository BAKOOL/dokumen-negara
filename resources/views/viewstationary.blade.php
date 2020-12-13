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
                    <img src="{{asset($product->image)}}" alt="" class="image" style="width: 100%">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="mid">
                    <h6>Stationary Name : {{$product->name}}</h6>
                    <h6>Stationary Price : {{$product->price}}</h6>
                    <h6>Stationary Stock : {{$product->stock}}</h6>
                    <h6>Stationary Type : {{$product->stationaryType_Id}}</h6>
                    <h6>Description : {{$product->description}}</h6>
                </div>
            </div>
            <div class="deleteedit text-right">
                @if(Auth::user()->is_admin == 1)
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="#" class="btn btn-primary">Edit</a>
{{--                    <button type="button" class="btn btn-danger">Delete</button>--}}
{{--                    <button type="button" class="btn btn-primary">Edit</button>--}}
                @endif
            </div>
        </div>
    </div>



@endsection
