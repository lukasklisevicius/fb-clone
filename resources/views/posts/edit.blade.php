@extends('layouts.app')

@section('content')
<div class="flex justify-center mb-10">
    <h1 class="text-5xl text-white"><span class="text-blue-500">my</span>Poster</h1>
</div>
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-800 p-6 rounded-lg">
            @auth
            <form action="{{route('edit',$post)}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}">
            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="6" class="focus:outline-none bg-gray-700 text-white w-full p-4 rounded-lg @error('body') border-red-500 @enderror" >{{$post->body}}</textarea>
                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
                <div>
                    <button type="submit" class="focus:outline-none bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Edit Post</button>
                </div>
            </div>
            </form>
            @endauth
        </div>
    </div>
@endsection