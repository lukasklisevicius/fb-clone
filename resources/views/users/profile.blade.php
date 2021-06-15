@extends('layouts.app')

@section('content')
<div class="flex justify-center mb-10">
    <h1 class="text-5xl text-white"><span class="text-blue-500">my</span>Poster</h1>
</div>
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-800 p-6 rounded-lg shadow-lg">
            <img class="border-solid border-2" src="uploads/avatars/{{auth()->user()->avatar}}" style="width: 150px; height:150px; float:left; border-radius:50%; margin-right: 30px;">
            <h2 class="text-2xl text-white">{{auth()->user()->name}}'s profile</h2>
            <br>
            <form enctype="multipart/form-data" action="{{route('profile')}}" method="POST">
            <label class="text-white" for="avatar">Update Profile Image</label>
            <br>
            <Input type="file" name="avatar" class="text-white">
                <br>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input class="bg-blue-500 text-white px-4 py-3 mt-6 rounded font-medium w-4/12" type="submit">
            </form>
        </div>
    </div>
@endsection