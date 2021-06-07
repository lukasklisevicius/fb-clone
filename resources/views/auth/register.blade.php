@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input name="name" id="name" placeholder="Name" type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')
                    border-red-500 @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">email</label>
                <input name="email" id="email" placeholder="Email" type="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email')
                border-red-500 @enderror" value="{{old('email')}}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input name="password" id="password" placeholder="Password" type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password')
                border-red-500 @enderror" value="">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password</label>
                <input name="password_confirmation" id="password_confirmation" placeholder="Repeat password" type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
        </form>
        </div>
    </div>
@endsection