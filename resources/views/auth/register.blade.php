@extends('layouts.app')

@section('content')

<div class="flex justify-center mb-10">
    <h1 class="text-5xl text-white"><span class="text-blue-500">my</span>Poster</h1>
</div>
    <div class="flex justify-center">
        <div class="w-6/12 bg-gray-800 p-6 rounded-lg shadow-lg">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input name="name" id="name" placeholder="Name" type="text" class="text-white bg-gray-700 w-full p-4 rounded-lg @error('name')
                    border-red-500 @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">email</label>
                <input name="email" id="email" placeholder="Email" type="email" class="text-white bg-gray-700 w-full p-4 rounded-lg @error('email')
                border-red-500 @enderror" value="{{old('email')}}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input name="password" id="password" placeholder="Password" type="password" class="text-white bg-gray-700 w-full p-4 rounded-lg @error('password')
                border-red-500 @enderror" value="">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password</label>
                <input name="password_confirmation" id="password_confirmation" placeholder="Repeat password" type="password" class="text-white bg-gray-700 w-full p-4 rounded-lg" value="">
            </div>
            <div>
                <button type="submit" class="focus:outline-none bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
        </form>
        </div>
    </div>
@endsection