@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen bg-indigo-900">
        <div class="text-center p-8 bg-white rounded-lg shadow-md">
            <h1 class="text-4xl font-bold text-indigo-600 mb-4 font-mono">Hello Sir,</h1>
            <p class="text-gray-700 tex-2xl ">I'm not sure what content or data to display here, so I've implemented filters and other functionalities in the <a href="{{ route('products.show') }}" class="text-indigo-600 hover:underline text-xl underline-offset-4">Show Products</a> section of the navigation bar.</p>
        </div>
    </div>


@endsection
