@extends('layouts.app')

@section('content')

    <style>
        table{
            text-align: center;
        }
    </style>

    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Number</th>
                <th scope="col">Stationary Type Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stationarytype as $number => $type)
                <tr>
                    <td>{{$number+1}}</td>
                    <td>{{$type->type_name}}</td>
                    <td>
                        <div class="form-row">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control col-7" id="type_name" placeholder="Type Name" name="type_name">
                                </div>
                            </form>
                            <button type="button" class="btn btn-primary btn-space">Update</button>
                            <button type="button" class="btn btn-danger btn-space">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
