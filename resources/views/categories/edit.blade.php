@extends('layouts.app')

@section('content')
    <div class="mt-20 flex justify-center items-center">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h1 class="text-2xl font-semibold mb-6">Update Category</h1>

            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="text-gray-600 text-sm">Update Category Name</label>
                    <input type="text" class="border w-full p-2 mt-1" id="name" name="name" value="{{ $category->name }}">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Category</button>
            </form>
        </div>
    </div>
@endsection
