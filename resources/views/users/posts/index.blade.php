@extends('layouts.app')

@section('content')
<div class="flex justify-center mb-10">
    <h1 class="text-5xl text-white"><span class="text-blue-500">my</span>Poster</h1>
</div>
<div class="flex justify-center">
<div class="w-8/12">
    <div class="p-6">
        <h1 class="text-white text-3xl font-medium mb-1">{{$user->name}}</h1>
        <p class="text-white">Posted {{$posts->count()}} {{Str::plural('post',$posts->count())}}</p>
    </div>
<div class="bg-gray-800 mb-6 p-6 rounded-lg shadow-lg">
    @if ($posts->count())
@foreach ($posts as $post)
    <x-posts :post="$post"/>
@endforeach

{{$posts->links()}}
@else
<p>{{$user->name}} have no posts</p>
@endif
</div>

</div>
</div>
@endsection