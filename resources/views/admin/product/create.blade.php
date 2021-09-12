<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Products') }}
        </h2>
    </x-slot>

    <div class="w-4/5 lg:w-6/12 mx-auto rounded bg-white my-14 p-8 shadow">
        @if ($errors->any())
            <div class="my-4">
                <div class="font-medium text-red-600">
                    {{ __('Whoops! Something went wrong.') }}
                </div>
                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('message'))
            <div class="w-full bg-green-500 p-5 rounded my-8">
                <span class="text-white">
                    {{session()->get('message')}}
                </span>
            </div>
        @endif
        <h1 class="lg:text-4xl text-gray-500 my-4">Add a new product</h1>
        <hr>
        <div>
            <form action="{{ route('admin.storeproducts') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid lg:grid-flow-col grid-cols-2 gap-4 my-4">
                    <div>
                        <label class="text-gray-700">Product name</label>
                        <input type="text" placeholder="Product name ?" name="name" class="w-full border-2 rounded border-2-gray-200 focus:bg-white ">
                    </div>
                    <div>
                        <label class="text-gray-700">Category</label>
                        <select name="category_id" class="w-full border-2 rounded border-2-gray-200 focus:bg-white">
                            <option value="1">Mens</option>
                            <option value="2">Womens</option>
                        </select>
                    </div>
                </div>
                <div class="my-4">
                    <label class="text-gray-700">Image</label>
                    <input type="file" name="img" class="w-full border-2 rounded border-2-gray-200 focus:bg-white">
                </div>
                <div class="grid lg:grid-flow-col gap-4 my-4">
                    <div>
                        <label class="text-gray-700">Color</label>
                        <input type="text" placeholder="Color?" name="color" class="w-full border-2 rounded border-2-gray-200 focus:bg-white ">
                    </div>
                    <div>
                        <label class="text-gray-700">Size</label>
                        <input type="text" placeholder="Size?" name="size" class="w-full border-2 rounded border-2-gray-200 focus:bg-white ">
                    </div>
                </div>
                <div class="my-4">
                    <label class="text-gray-700">Rating</label>
                    <select name="rating" class="w-full border-2 rounded border-2-gray-200 focus:bg-white">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="my-4">
                    <label class="text-gray-700">Product Description</label>
                    <textarea name="description" placeholder="Description ..." 
                    class="w-full border-2 rounded border-2-gray-200 focus:bg-white resize-y max-h-52" cols="30" rows="10"></textarea>
                </div>
                <div class="my-4">
                    <label class="text-gray-700">Product Description</label>
                    <input type="number" placeholder="Price?" name="amount" min="1" class="w-full border-2 rounded border-2-gray-200 focus:bg-white ">
                </div>

                <x-button>
                    {{__('Done')}}
                </x-button>

            </form>
        </div>
    </div>

</x-app-layout>