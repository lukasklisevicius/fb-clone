@extends('layouts.app')

@section('content')
<div class="flex justify-center mb-10">
    <h1 class="text-5xl text-white"><span class="text-blue-500">my</span>Poster</h1>
</div>
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-800 p-6 rounded-lg mb-10 shadow-lg">
        
            
            @auth
            <form action="{{route('posts')}}" method="post" class="shadow-lg">
                @csrf
            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="5" class="focus:outline-none text-white bg-gray-700 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something"></textarea>
                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
                <div>
                    <button type="submit" class="focus:outline-none bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Post</button>
                </div>
            </div>
            </form>
            @endauth



        @if ($posts->count())
            @foreach ($posts as $post)
                <x-posts :post="$post"/>
            @endforeach

            {{$posts->links()}}
        @else
        <p>There are no posts</p>
        @endif
        </div>
    </div>
@endsection