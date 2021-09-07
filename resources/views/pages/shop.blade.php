@extends('layouts.layout')

@section('content')
    <div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-4xl font-extrabold tracking-tight text-gray-900">Shop</h2>
        
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $item)
                    <div class="group relative">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none p-2">
                            <a href="{{ route('productoverview', $item->id) }}">
                                <img src="{{ asset($item->img) }}" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </a>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="{{ route('productoverview', $item->id) }}">
                                {{$item->name}}
                                </a>
                                <p class="text-sm font-medium text-gray-900">{{$item->amount}} Pkr</p>
                            </h3>
                            </div>
                            
                        </div>
                        </div>   
                @endforeach
                <!-- More products... -->
            </div>
            
            {{ $products->links() }}
            </div>
        </div>
  
    </div>  
@endsection