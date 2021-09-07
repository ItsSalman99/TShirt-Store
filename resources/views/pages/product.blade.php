@extends('layouts.layout')

@section('content')
    <div class="bg-white h-screen w-full">
        <div class="w-4/5 mx-auto p-5">
            <div class="grid lg:grid-flow-col gap-8">
                <div class="bg-gray-200 p-5 rounded-lg">
                    <img src="{{ asset($product->img) }}" alt="" class="">
                </div>
                <div class="p-5">
                    <h1 class="text-4xl font-semibold my-4">{{$product->name}}</h1>
                    <span class="text-white text-lg font-semibold my-4 bg-blue-400 rounded-full px-2">Pkr . {{$product->amount}}</span>
                    <p class="text-lg text-gray-700 my-4">{{$product->description}}</p>

                    <div class="flex justify-start">
                        <div class="mr-2">
                            <input type="number" name="qty" min="1" max="10" placeholder="1" class="border rounded p-2">
                        </div>
                        <div class="px-2 py-2 bg-gray-900 rounded">
                            <a href="" class="py-2 text-white">Add to cart</a>
                        </div>
                    </div>
                    <div class="flex my-4">
                        @for ($i = 0; $i < $product->rating; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                        <div>
                            <span>({{$product->rating}})</span>
                        </div>
                    </div>
                    <hr class="my-4">
                    <span class="text-gray-600 font-semibold">Category : {{$product->category->name}}</span>

                </div>
            </div>
        </div>
    </div>
@endsection