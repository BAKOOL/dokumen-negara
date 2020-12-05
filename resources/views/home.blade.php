@extends('layouts.app')


@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <img src="images/bg.jpg" id="bg" alt="">


@endsection

