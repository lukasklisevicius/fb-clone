@extends('layouts.app')

@section('content')
<div class="flex justify-center mb-10">
    <h1 class="text-5xl text-white"><span class="text-blue-500">my</span>Poster</h1>
</div>
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-800 p-6 rounded-lg mb-1 shadow-lg">
        <x-posts :post="$post"/>

            @foreach ($comments as $comment)
            <div class=" w-10/12 bg-gray-700 pl-3 py-2 rounded-lg mb-1 shadow-lg">
                <x-comment :comment="$comment"/>
            </div>
            @endforeach

            @auth
            <form action="{{route('comment',$post)}}" method="POST" class="shadow-lg">
                @csrf
            <div class="mb-4 mt-6">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="2" class="focus:outline-none text-white bg-gray-700 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Your Comment"></textarea>
                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
                    <button type="submit" class="focus:outline-none bg-blue-500 text-white px-2 py-1 rounded font-medium w-full">Comment</button>
            </div>
            </form>
            @endauth
        </div>


    </div>
@endsection