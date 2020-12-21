@extends('layouts.app')

@section('content')
    <style>
        tbody{
            text-align: center;
        }
    </style>

    <div class="container">
        <table class="table">
            @foreach($blabla as $b)
            <thead class="thead-light">
            <tr>
                <th scope="col">{{$transaction->created_at}}</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Total: Rp. {{number_format($blabla->price)}} </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$b->name}}</td>
                <td>Rp {{number_format($ba->price)}}</td>
                <td>Quantity : {{$b->quantity}}</td>
                <td>Sub total : RP. {{number_format($b->subtotal)}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
