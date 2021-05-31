@extends('base')


@section('content')

        <img src="{{asset('/images/flag.jpg')}}" alt="Burkina Faso flag" class="rounded shadow-md h-32 mt-12">

        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Ouagadougou!</h1>

        <p class="text-lg mt-5 text-gray-800">It's currently {{date('H:i A' )}}.</p>

@endsection
