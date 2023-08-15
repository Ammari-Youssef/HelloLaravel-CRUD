@extends('layout')
@section("title" , "Create Computer")
@section('content')
<div class="relative flex items-top justify-center  bg-gray-100 light:bg-gray-900">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 ">
            <h1>Computers Factory </h1>
        </div>

        <div class="mt-8">
            <div class="flex justify-center p-8">

                <form action="{{ route('computers.store') }}" method="post" class="form ">
                    @csrf
                    <div>
                        <label for="computer-name">Computer name : </label>
                        <input id="computer-name" type="text" name="computer-name" value="{{old('computer-name')}}" />
                    </div>
                    @error('computer-name')
                    <span style="color:red">
                        {{$message}}
                    </span>
                    @enderror
                    <div>
                        <label for="computer-origin">Computer origin : </label>
                        <input id="computer-origin" type="text" name="computer-origin" value="{{old('computer-origin')}}" />

                    </div>
                    @error('computer-origin')
                    <span style="color:red">
                        {{$message}}
                    </span>
                    @enderror
                    <div>
                        <label for="computer-price">Computer price : </label>
                        <input id="computer-price" type="text" name="computer-price" value="{{old('computer-price')}}" />

                    </div>
                    @error('computer-price')
                    <span style="color:red">
                        {{$message}}
                    </span>
                    @enderror

                    <br> 
                    <button type="submit">Add Computer </button>
                </form>
            </div>

        </div>


    </div>
</div>
@endsection