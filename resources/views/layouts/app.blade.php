<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200 ">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li class="p-3">
                <a href="/">Home</a>
            </li>
            <li class="p-3">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="p-3">
                <a href="{{ route('posts')}}">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">

            {{-- @if (auth()->user())   --}}
            {{-- another way to do it --}}

            @auth
                <li class="p-3">
                    <a href="">{{ auth()->user()->name }}</a>
                </li>

                <li class="p-3">
                    <form action="{{ route('logout')}}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit" >Logout</button>
                    </form>
                </li>
            {{-- @else --}}
            @endauth

            @guest
                <li class="p-3">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="p-3">
                    <a href="{{ route('register') }}">Register</a>
                </li>
           
            {{-- @endif --}}

            @endguest
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>