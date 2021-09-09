<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T-Shirt Store</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @if (Request::path() == '/')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Suez+One&display=swap');
            body{
                background-image: url('assets/back.jpg');
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
            }
        </style>
    @endif
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Suez+One&display=swap');
        h1{
                font-family: 'Suez One', serif;
        }
    </style>

</head>
<body>
    <nav class="bg-gray-800 {{Request::path() === '/' ? 'bg-opacity-30' : '' }} p-5">
        <a href="/" class="text-xl text-white">T-Shirt Store</a>
        <ul class="inline-block float-right invisible lg:visible">
            <li class="inline text-white px-4">
                <a href="/">Home</a>
            </li>
            <li class="inline text-white px-4">
                <a href="/">About</a>
            </li>
            <li class="inline text-white px-4">
                <a href="/shop">Shop</a>
            </li>
            @auth
            <li class="inline text-white px-4">
                <a href="/dashboard">
                    <x-button>
                        {{__('Dashboard')}}
                    </x-button>
                </a>
            </li>
            @endauth
            @guest
            <li class="inline text-white px-4">
                <a href="/login">Log in</a>
            </li>
            @endguest
            <li class="inline-block text-white">
                <a href="/cart" class="flex">
                    <span class="px-1 text-blue-800 font-semibold">Rs. {{Cart::total()}}</span>
                    <span class="rounded-full {{Cart::count() == 0 ? 'bg-red-600' : 'bg-blue-500' }}  px-2">{{Cart::count()}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

    <div class="">
        @yield('content')
    </div>
</body>
</html>