@extends('base')

@section('title','About Us ' . config('app.name'))


@section('content')


        <img src="{{asset('/images/about.jpg')}}" alt="about" class="rounded shadow-md h-32">

        <p>C'est ensemble <span class="text-pink-500">&hearts;</span> qu'on le fera</p>

        <p><a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir a la page d'accueil</a></p>
@endsection
