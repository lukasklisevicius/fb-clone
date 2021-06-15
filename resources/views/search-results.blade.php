@extends('layouts.app')

@section('content')
<div class="flex justify-center mb-10">
    <h1 class="text-5xl text-white"><span class="text-blue-500">my</span>Poster</h1>
</div>
<div class="flex justify-center">
<div class="w-8/12">

<div class="bg-gray-800 mb-6 p-6 rounded-lg shadow-lg">
    @if (empty($posts))
        <p>asdasdasdsad</p>
    @endif
@foreach ($posts as $post)
    <x-posts :post="$post"/>
@endforeach

</div>

</div>
</div>
@endsection