@extends('layout')
@section("title" , "Computers")
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 light:bg-gray-900">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 py-15">
            <h1>Computers Page</h1>
        </div>

        <div class="mt-8">

            @foreach ($computers as $cmp)
            <a href="{{ route('computers.show', ['computer' => $cmp['id']]) }}">
                <li> {{$cmp['name']}} is from {{$cmp["origin"]}}</li>
            </a>
        

            @endforeach
            <a href="{{ route('computers.create') }}">

                <button> Add a computer <i class="fas fa-plus"></i> </button>

            </a>
        </div>


    </div>
</div>
@endsection