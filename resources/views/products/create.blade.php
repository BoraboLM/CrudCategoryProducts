@extends('layouts.app')

@section('content')
    <div class="mt-20 flex justify-center items-center">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h1 class="text-2xl font-semibold mb-6">Create Product</h1>

            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="text-gray-600 text-sm">Product Name</label>
                    <input type="text" class="border w-full p-2 mt-1" id="name" name="name" placeholder="Enter product name" required>
                </div>

                <div class="mb-4">
                    <label for="price" class="text-gray-600 text-sm">Product Price</label>
                    <input type="number" class="border w-full p-2 mt-1" id="price" name="price" placeholder="Enter product price" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="text-gray-600 text-sm">Product Description</label>
                    <textarea class="border w-full p-2 mt-1" id="description" name="description" rows="3" placeholder="Enter product description"></textarea>
                </div>

                <div class="mb-4">
                    <label for="category_id" class="text-gray-600 text-sm">Category</label>
                    <select class="border w-full p-2 mt-1" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Product</button>
            </form>
        </div>
    </div>
@endsection
