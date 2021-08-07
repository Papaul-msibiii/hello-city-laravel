@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
        <img src="{{ asset('images/papaul.JPG') }}" alt="Papaul profile" class="my-12 rounded-full shadow-md h-40">

        <h2 class="mb-5 text-gray-700">Build with <span class="text-pink-500">&hearts;</span> by PAPAUL MSIBII.</h2>

        <p>
                <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'acceuil</a>
        </p>

@endsection
