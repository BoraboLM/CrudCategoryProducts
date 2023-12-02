@extends('layouts.app')

@section('content')
    <div class="mt-20 flex justify-center items-center">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h1 class="text-2xl font-semibold mb-6">Update Product</h1>

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="text-gray-600 text-sm">Edit Product Name</label>
                    <input type="text" class="border w-full p-2 mt-1" id="name" name="name" value="{{$product->name}}" >
                </div>

                <div class="mb-4">
                    <label for="price" class="text-gray-600 text-sm">Edit Product Price</label>
                    <input type="number" class="border w-full p-2 mt-1" id="price" name="price" value="{{$product->price}}" >
                </div>

                <div class="mb-4">
                    <label for="description" class="text-gray-600 text-sm">Edit Product Description</label>
                    <textarea class="border w-full p-2 mt-1" id="description" name="description" rows="3" >{{ $product->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="category_id" class="text-gray-600 text-sm">Edit Category * Clickable</label>
                    <select id="category_id" name="category_id" class=" cursor-pointer form-select appearance-none block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500">
                        <!-- @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                        @endforeach -->
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Product</button>
            </form>
        </div>
    </div>
@endsection
