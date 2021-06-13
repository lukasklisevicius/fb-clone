<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myPoster</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-gray-200">
    <nav class="p-4 bg-white flex justify-between mb-3">
        <ul class="flex items-center">
            <li><a class="p-3" href="{{route('home')}}">myPoster</a></li>
            <li><a class="p-3" href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a class="p-3" href="{{route('posts')}}">Post</a></li>
        </ul>

        <ul class="flex items-center">
            @auth
            <img src="{{asset('uploads/avatars/'.auth()->user()->avatar)}}" style="width: 32px; height:32px; float:left; border-radius:50%;">
            <li><a class="p-3" href="{{route('profile')}}">{{auth()->user()->name}}</a></li>
            <form action="{{route('logout')}}" method="post" class="inline p-3">
            @csrf
             <button class="focus:outline-none" type="submit">Logout</button>   
            </form>
            @endauth

            @guest
            <li><a class="p-3" href="{{route('login')}}">Login</a></li>
            <li><a class="p-3" href="{{route('register')}}">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>