
@extends('layouts.app')

@section('content')
    <div class="mt-40 flex justify-center items-center">
        <div class="text-center text-gray-800">
            <h1 class="text-2xl font-mono font-medium mb-4">Products</h1>

            <table class="mt-6 w-full border-collapse border border-gray-400">
                <thead>
                    <tr>
                        <th class="p-3 border border-gray-400 bg-gray-200">Name</th>
                        <th class="p-3 border border-gray-400 bg-gray-200">Price</th>
                        <th class="p-3 border border-gray-400 bg-gray-200">Description</th>
                        <th class="p-3 border border-gray-400 bg-gray-200">Category</th>
                        <th class="p-3 border border-gray-400 bg-gray-200">Edit</th>
                        <th class="p-3 border border-gray-400 bg-gray-200">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="p-3 border border-gray-400">{{ $product->name }}</td>
                            <td class="p-3 border border-gray-400">${{ $product->price }}</td>
                            <td class="p-3 border border-gray-400">{{ $product->description }}</td>
                            <td class="p-3 border border-gray-400">{{ $product->category->name }}</td>
                            <td class="p-3 border border-gray-400">
                                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="p-3 border border-gray-400">
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
