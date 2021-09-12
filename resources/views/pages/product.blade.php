@extends('layouts.layout')

@section('content')
    <div class="bg-white w-full">
        <div class="w-4/5 mx-auto my-8 p-5">
            <div class="grid lg:grid-flow-col gap-12">
                <div class="bg-gray-200 p-5 rounded-lg">
                    <img src="{{ asset('/storage/products/'.$product->img) }}" alt="" class="hover:opacity-75">
                </div>
                <div>
                    <h1 class="text-4xl">{{$product->name}}</h1>
                    <hr>
                    <p class="text-white text-lg bg-blue-400 rounded-full px-4 my-4 w-32">
                        Pkr. {{$product->amount}}
                    </p>
                    <p class="text-lg">{{$product->description}}</p>
                    <p class="text-white text-lg bg-blue-400 rounded-full px-4 my-4 w-52">Color : {{$product->color}}</p>
                    <p class="text-white text-lg bg-blue-400 rounded-full px-4 my-4 w-52">Size : {{$product->size}}</p>
                        <form action="{{ route('addtoBag', $product->id) }}" method="POST">
                            @csrf
                            <div class="flex my-2">
                                <div>
                                    <input type="number" name="qty" min="1" max="10" placeholder="1" class="px-2 py-2 border rounded" value="1">
                                </div>
                                <div>
                                    <button type="submit" class="px-4 py-2 bg-gray-900 text-white rounded ml-2">
                                        Add to cart
                                    </button>
                                </div>
                            </div>

                        </form>
                    <div class="flex my-4">
                        @for ($i = 0; $i < $product->rating; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                        
                        ({{$product->rating}})
                    </div>
                    <hr>
                    <div>
                        <p>Category : {{$product->category->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection