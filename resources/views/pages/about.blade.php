@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
        <img src="/images/logos.png" alt="Logo Papaull">

        <p>Build with &hearts; by LES TEACHERS DU NET.</p>

        <p><a href="{{ route('home') }}">Revenir à la page d'acceuil</a></p>

@endsection
