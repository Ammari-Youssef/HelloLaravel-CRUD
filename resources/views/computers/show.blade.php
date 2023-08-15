@extends('layout')
@section("title" , "Show Computer's details")

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 light:bg-gray-900">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8">
            <h1>Computers Page</h1>
        </div>

        <div class="mt-8">

            <h1>pc: {{$computer['name']}} is from {{$computer['origin']}} -<b> ${{$computer['price']}} </b></h1>

        </div>
        <a href="{{route('computers.edit',$computer->id)}}">edit this computer</a>

        <form action="{{ route('computers.destroy',  $computer->id ) }}" method="post">
            @csrf
            @method('DELETE')
            <input value=Delete type="submit">
        </form>


    </div>
</div>
@endsection