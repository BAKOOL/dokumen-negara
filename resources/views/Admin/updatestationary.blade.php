@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            Data berhasil disimpan
        </div>
    @endif

    <div class="container">
        <form action="{{route('update', $stationary->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{$stationary->name}}" type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input value="{{$stationary->description}}" type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input value="{{$stationary->stock}}" type="number" class="form-control" id="stock" name="stock">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input value="{{$stationary->price}}" type="number" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Update Stationary Data</button>
        </form>
    </div>
@endsection
