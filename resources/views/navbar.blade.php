<div class="flex justify-between items-center bg-gray-800 p-4">
  <ul class="flex space-x-6 text-white">
    <li><a href="{{ route('home') }}" class=" text-xl hover:text-gray-300">Home</a></li>
    <li><a href="{{ route('products.index') }}" class=" text-xl hover:text-gray-300">Products</a></li>
    <li><a href="{{ route('categories.index') }}" class=" text-xl hover:text-gray-300">Categories</a></li>
    <li><a href="{{ route('products.create') }}" class=" text-xl hover:text-gray-300">Create Product</a></li>
    <li><a href="{{ route('categories.create') }}" class=" text-xl hover:text-gray-300">Create Categories</a></li>
  </ul>

  <ul class="flex space-x-4 text-white justify-end">
    <li><a href="{{ route('products.show') }}" class="text-xl hover:text-gray-300">Show Products</a></li>
    <li><a href="{{ route('categories.show') }}" class="text-xl hover:text-gray-300">Show categories</a></li>
  </ul>
</div>
