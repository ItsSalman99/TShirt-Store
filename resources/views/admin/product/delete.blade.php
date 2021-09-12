<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="w-11/12 mx-auto bg-white my-8">
        @if (session()->has('message'))
            <div class="w-full bg-green-500 p-5 rounded my-8">
                <span class="text-white">
                    {{session()->get('message')}}
                </span>
            </div>
        @endif

        <h1 class="text-2xl p-5">Are you sure, You want to delete this product? </h1>

        <div class="flex flex-col p-5">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Image
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Title
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Color
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Size
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Rating
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Uploaded at
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href=""><img src="{{ asset('/storage/products/'.$product->img) }}" class="w-20 hover:opacity-75" alt=""></a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-sm text-gray-900">{{$product->name}}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-sm text-gray-900">{{$product->color}}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <span class="text-sm text-gray-900">{{$product->size}}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex">
                                    @for ($i = 0; $i < $product->rating; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    @endfor
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <p class="text-sm text-gray-900 w-20 truncate">{{$product->description}}</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <span class="text-sm text-gray-900">{{$product->amount}}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <span class="text-xs text-gray-900">{{date("F j, Y, g:i a",strtotime($product->created_at))}}</span>
                            </td>
                        </tr>
                    <!-- More people... -->
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>

        <div class="flex gap-4 p-5">
            <div>
                <form action="{{ route('admin.deleteproduct', $product->id) }}" method="POST">
                    @csrf

                    <x-button>
                        {{__('Yes, Delete')}}
                    </x-button>

                </form>
            </div>
            <div>
                <a href="{{ route('admin.products') }}">
                    <x-button>
                        {{__('No, Go back')}}
                    </x-button>
                </a>
            </div>
        </div>

    </div>

</x-app-layout>