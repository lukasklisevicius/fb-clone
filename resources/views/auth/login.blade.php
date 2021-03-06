@extends('layouts.app')

@section('content')
<div class="flex justify-center mb-10">
    <h1 class="text-5xl text-white"><span class="text-blue-500">my</span>Poster</h1>
</div>
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-8 rounded-lg bg-gray-800 shadow-lg">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{session('status')}}
                </div>

            
            @endif
        <form action="{{route('login')}}" method="POST">
            @csrf
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
            <div>
                <button type="submit" class="focus:outline-none bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
            </div>
        </form>
        </div>
    </div>
@endsection