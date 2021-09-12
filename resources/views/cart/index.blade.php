@extends('layouts.layout')

@section('content')
    <div class="bg-white lg:w-3/5 w-3/5 mx-auto my-8">
        <div class="flex justify-between w-full">
            <div>
                <h1 class="lg:text-2xl ">Shopping Cart</h1>
            </div>
            <div>
                <button type="submit" class="lg:px-4 px-2 py-2 rounded bg-gray-900 text-white">
                    <a href="{{ route('cartDestroy') }}" class="flex justify-between text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg>
                        Empty Cart
                    </a>
                </button>
            </div>
        </div>
        <hr class="my-4">
        @if (session()->has('message'))
            <div class="w-full bg-green-500 p-5 rounded my-8">
                <span class="text-white">
                    {{session()->get('message')}}
                </span>
            </div>
        @endif
        
        @foreach (Cart::content() as $item)
        <div class="border rounded my-4 p-2">
                <div class="flex gap-8 my-4 flex-col lg:flex-row justify-evenly">
                    <div class="flex-1 mx-2 bg-gray-100 rounded-full p-2">
                        <img src="{{ asset('storage/products/'.$item->options->img) }}" alt="">
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col justify-around">
                            <div class="">
                                <h1 class="text-2xl my-2">{{$item->name}}</h1>
                                <h2 class="my-2">Color : {{$item->options->color}}</h2>
                                <h2 class="my-2">Size : {{$item->options->size}}</h2>
                                <h2 class="text-lg text-white my-2 rounded-full bg-blue-400 w-20 px-2">Pkr. {{$item->price}}</h2>
                            </div>
                            <div class=" bg-gray-200 rounded-full w-8 h-6">
                                <a href="{{ route('Cartremoved',$item->rowId) }}" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 mx-2">
                        <form action="{{ route('Cartupdate',$item->rowId) }}" method="post">
                            @csrf
                            <input type="number" name="qty" min="1" max="10" class="lg:w-14 border rounded text-gray-500 ring-1 px-2 py-2 my-2" value="{{$item->qty}}">
                            
                            <button type="submit" class="text-sm bg-green-400 text-white rounded px-2 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl my-2">Pkr. {{$item->subtotal}} Pkr</h2>
                    </div>
                    
                </div>
                <hr >
            @endforeach
        </div>

        @if (Cart::count() >0)
            
        <div class="lg:w-3/5 lg:ml-auto p-2 border">
            <h1 class="text-2xl">Cart Totals</h1>
            <hr>
            <div class="flex flex-col my-4">
                <div class="flex flex-row justify-around">
                    <h2 class="font-semibold text-lg">Total : </h2>
                    <h2 class="font-semibold text-lg"> {{Cart::total()}} Pkr</h2>
                </div>
                <hr>
                <div class="flex flex-row justify-around">
                    <h2 class="font-semibold text-lg">Tax : </h2>
                    <h2 class="font-semibold text-lg"> {{Cart::tax()}} Pkr</h2>
                </div>
            </div>
            <hr>
            <div class="p-2 text-center">
                <button class="lg:text-xl px-2 py-4 bg-gray-900 text-white w-full">
                    <a href="#">Proceed to checkout</a>
                </button>
            </div>
        </div>
        @endif

    </div>
@endsection