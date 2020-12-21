@extends('layouts.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <style>
        img{
            max-width:180px;
        }
    </style>

    <div class="container">
        <form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <img id="blah" src="" alt="your image" />
                <input type="file" class="form-control-file" id="image" name="image" onchange="readURL(this);">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
            </div>
            <div class="form-group">
                <label for="type_id">Types</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Types</div>
                    </div>
                    <select class="custom-select" id="type_id" name="type_id">
                        <option value="1">pen</option>
                        <option value="2">pencil</option>
                        <option value="3">ruler</option>
                        <option value="4">notebook</option>
                        <option value="5">dictionary</option>
                        <option value="6">smart pen</option>
                        <option value="7">smart pencil</option>
                        <option value="8">smart reader</option>
                        <option value="9">smart note</option>
                        <option value="10">eraser</option>
                    </select>
                </div>

            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{old('stock')}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input  type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
            </div>
            <button type="submit" class="btn btn-primary">Add New Stationary</button>
        </form>
    </div>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
