@extends('app')


@section('content')
        <img src="{{ asset('images/senegal-flag.png') }}" alt="Senegal flag">

        <h1>Hello from Dakar!</h1>

        <p>It's currently {{ date('h:i A') }}</p>

@endsection
