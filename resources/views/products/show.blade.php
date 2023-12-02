@extends('layouts.app')

@section('content')
    <div class="flex justify-end items-center py-4 px-6 bg-blue-500">
        <form action="{{ route('products.show') }}" method="get" class="flex items-center">
            <label for="category" class="text-white mr-2">Filter by Category:</label>
            <select name="category" id="category" class="mr-2 p-2 rounded border-none cursor-pointer">
                <!-- If the Category is empty, then it will set to default that displays all prods -->
                <option value="" {{ empty(request('category')) ? 'selected' : '' }} class="text-blue-500">All Categories</option>

                <!-- Loop through all the categories and display them in the dropdown -->
                @foreach($categories as $category)
                    <option value="{{ $category->name }}" {{ request('category') == $category->name ? 'selected' : '' }} class="text-blue-500">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="bg-white text-blue-500 px-4 py-2 rounded">Apply Filter</button>
        </form>
    </div>


    @foreach ($products as $product)
    <!-- Product Card -->
    <div class="border-b border-gray-200 mb-8 p-10">
        <div class="flex justify-between items-center mb-2">
            <!-- Product Details -->
            <div>
                <h1 class="text-2xl font-bold text-blue-700">{{ $product->name }}</h1>
                <p class="text-gray-500">{{ $product->category->name }}</p>
            </div>

            <!-- Price -->
            <div class="flex items-center">
                <p class="text-lg text-blue-700 font-semibold">Price: ${{ $product->price }}</p>
            </div>
        </div>

        <!-- Product Description -->
        <div class="p-4 border rounded border-gray-300">
            <p class="text-gray-700">{{ $product->description }}</p>
        </div>
    </div>
@endforeach

@endsection
