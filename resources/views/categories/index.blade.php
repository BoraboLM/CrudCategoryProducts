@extends('layouts.app')

@section('content')
    <div class="mt-40 flex justify-center items-center">
        <div class="text-center text-gray-800">
            <h1 class="text-2xl font-mono font-medium mb-4">Categories</h1>

            <table class="mt-6 w-full border-collapse border border-gray-400">
                <thead>
                    <tr>
                        <th class="p-3 border border-gray-400 bg-gray-200">Category Name</th>
                        <th class="p-3 border border-gray-400 bg-gray-200">Edit</th>
                        <th class="p-3 border border-gray-400 bg-gray-200">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td class="p-3 border border-gray-400">{{ $category->name }}</td>
                            <td class="p-3 border border-gray-400">
                                <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="p-3 border border-gray-400">
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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
