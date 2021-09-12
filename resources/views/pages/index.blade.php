@extends('layouts.layout')

@section('content')
    <div class="w-4/5 mx-auto py-12 h-screen">
        <h1 class="text-6xl lg:text-8xl text-white w-3/5">Raining Offers For Hot Summer!</h1>
        <p class="text-2xl lg:text-4xl text-white py-8">25% Off On All Products</p>

        <div class="lg:w-3/6 flex justify-start">
            <button class="bg-white px-4 py-2 mr-8">Shop Now</button>
            <button class="text-white px-4 py-2 ring-1 ring-white font-semibold">Learn More</button>
        </div>

    </div>

    <div class="bg-white lg:h-screen w-full py-8">
        <h1 class="text-2xl lg:text-6xl text-center">Featured Products</h1>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2>
      
          <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($products as $item)
              <div class="group relative">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                  <a href="{{ route('productoverview',$item->id) }}">
                    <img src="{{ asset('/storage/products/'.$item->img) }}" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                  </a>
                </div>  
                <div class="mt-4 flex justify-between">
                  <div>
                    <h3 class="text-sm text-gray-700">
                      <a href="{{ route('productoverview',$item->id) }}">
                        {{$item->name}}
                      </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">{{$item->color}}</p>
                  </div>
                  <p class="text-sm font-medium text-gray-900">{{$item->amount}}</p>
                </div>
              </div>
            @endforeach
            
            <button class="px-4 py-2 bg-gray-900 text-white">
              <a href="/shop">Let's shop</a>
            </button>

          </div>
        </div>
      </div>
  

    </div>

@endsection