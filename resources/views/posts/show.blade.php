@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg mb-1">
        <x-posts :post="$post"/>

            @foreach ($comments as $comment)
            <div class="w-12/12 bg-gray-100 pl-3 py-2 rounded-lg mb-1">
                <x-comment :comment="$comment"/>
            </div>
            @endforeach

            @auth
            <form action="{{route('comment',$post)}}" method="POST">
                @csrf
            <div class="mb-4 mt-6">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="2" class="focus:outline-none bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Your Comment"></textarea>
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