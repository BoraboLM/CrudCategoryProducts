@extends('layouts.app')

@section('content')
    <div class=" mt-40 flex justify-center items-center">
        <div class="text-center text-gray-800">
            <h1 class="font-mono text-4xl font-bold mb-6 cursor-pointer hover:animate-spin hover:text-pink-400 ease-in-out">CRUD Categories and Products</h1>
            <p class="text-1xl font-medium">By: Borabo Lawrence M. 41-ITE-01</p>

            <div class="space-x-6 mt-6">
                <a href="{{ route('products.index') }}" class="bg-indigo-500 text-white px-6 py-4 rounded hover:bg-indigo-600">Products</a>
                <a href="{{ route('categories.index') }}" class="bg-pink-500 text-white px-6 py-4 rounded hover:bg-pink-600">Categories</a>
            </div>
        </div>
    </div>
@endsection
