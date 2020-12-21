@extends('layouts.app')

@section('content')

    <style>
        .checkout{
            margin-top: 20px;
            margin-left: 20px;
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5>Stationary Name : </h5>
                <li>Stationary Price : </li>
                <li>Quantity : </li>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <h6>Total : </h6>
                <div class="deleteedit text-right">
                    <a href="#" class="btn btn-primary">Edit item</a>
                    <a href="#" class="btn btn-danger">Delete item</a>
                </div>
            </div>
        </div>
        <div class="checkout">
            <a href="#" class="btn btn-danger">CheckOut</a>
        </div>
    </div>
@endsection
