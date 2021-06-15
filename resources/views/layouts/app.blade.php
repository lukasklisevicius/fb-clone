<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myPoster</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-900">
    <nav class="p-1 bg-gray-800 flex justify-between mb-10 shadow-lg h-14">
        <ul class="flex items-center">
            <li><a class="p-3 text-white" href="{{route('home')}}"><span class="text-blue-500">my</span>Poster</a></li>
            <li><a class="p-3 text-white" href="{{route('posts')}}">Posts</a></li>
        </ul>
        <form class="w-6/12" action="{{route('search')}}" method="get">
        <input class="text-white h-8 mt-2 w-full bg-gray-700 rounded-lg px-4" type="text" name="search" value="{{request()->input('search')}}" id="search" placeholder="Search...">
        </form>

        <ul class="flex items-center">
            @auth
            <img class="border-solid border-2 border-white" src="{{asset('uploads/avatars/'.auth()->user()->avatar)}}" style="width: 32px; height:32px; float:left; border-radius:50%;">
            <li><a class="p-3 text-white" href="{{route('profile')}}">{{auth()->user()->name}}</a></li>
            <form action="{{route('logout')}}" method="post" class="inline p-3">
            @csrf
             <button class="focus:outline-none text-white" type="submit">Logout</button>   
            </form>
            @endauth

            @guest
            <li><a class="p-3 text-white" href="{{route('login')}}">Login</a></li>
            <li><a class="p-3 text-white" href="{{route('register')}}">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>