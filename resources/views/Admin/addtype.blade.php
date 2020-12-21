@extends('layouts.app')

@section('content')

    <style>
        table{
            text-align: center;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Stationary Type Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stationarytype as $number => $type)
                        <tr>
                            <td>{{$number+1}}</td>
                            <td>{{$type->type_name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <img id="blah" src="" alt="your image" />
                        <input type="file" class="form-control-file" id="image" name="image" onchange="readURL(this);">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="type_name" name="type_name" placeholder="Stationary Type">
                    </div>
                    <button type="submit" class="btn btn-primary">Add New Stationary Type</button>
                </form>
            </div>

        </div>

    </div>
@endsection
