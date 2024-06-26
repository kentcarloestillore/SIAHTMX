@extends('template.base')

@section('content')
    <div class="flex justify-between">
        <h1 class="text-4xl">Products</h1>
        <div class="flex gap-5">
            <form
            hx-get="/api/products"
            hx-trigger="keyup"
            hx-swap="innerHTML"
            hx-target="#product_list"
            class="ml-4">
            <input type="text" name="filter" placeholder="Search products..." class="p-2 border border-gray-300 rounded" autocomplete="off">
        </form>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="openModalButton">Add</button>
        </div>
    </div>
    <hr>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="this.parentElement.parentElement.style.display='none';">
                    <path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 01-1.414-1.414l2.935-2.935-2.935-2.934a1 1 0 011.414-1.414L10 8.586l2.934-2.935a1 1 0 011.414 1.414L11.414 10l2.935 2.934a1 1 0 010 1.415z"/>
                </svg>
            </span>
        </div>
    @endif
    <div id="product_list" 
        class="flex flex-wrap gap-3 mt-5"
        hx-get="api/products"
        hx-trigger="load delay:200ms"
        hx-swap="innerHTML">
    </div>
    <div id="addProductModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3">
            <div class="px-4 py-3 border-b flex justify-between items-center">
                <h2 class="text-xl font-semibold">Add New Product</h2>
                <button id="closeModalButton" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-4">
                <form id="addProductForm" hx-post="/products"
                      hx-target="#product_list"
                      hx-swap="innerHTML"
                      hx-trigger="submit"
                      hx-on::after-request="this.reset()"
                      method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="productName" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="productName" name="name">
                        <div id="name_error" class="text-danger"></div>
                    </div>
                    <div class="mb-4">
                        <label for="productDescription" class="block text-sm font-medium text-gray-700">Description</label>
                        <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="productDescription" name="description">
                        <div id="description_error" class="text-danger"></div>
                    </div>
                    <div class="mb-4">
                        <label for="productQuantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                        <input type="number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="productQuantity" name="quantity">
                        <div id="quantity_error" class="text-danger"></div>
                    </div>
                    <div class="mb-4">
                        <label for="productPrice" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" step="0.01" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="productPrice" name="price">
                        <div id="price_error" class="text-danger"></div>
                    </div>
                    <div class="mb-4">
                        <label for="img" class="block text-sm font-medium text-gray-700">Image Link</label>
                        <input class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="img" name="imgUrl">
                        <div id="img_error" class="text-danger"></div>
                    </div>
                    <div id="addProductMessage" class=""></div>
                    <div class="flex justify-end">
                        <button type="button" id="cancelButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel</button>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const openModalButton = document.getElementById('openModalButton');
        const closeModalButton = document.getElementById('closeModalButton');
        const cancelButton = document.getElementById('cancelButton');
        const modal = document.getElementById('addProductModal');

     
        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
            document.getElementById('addProductMessage').innerHTML = "";
            document.getElementById('name_error').innerHTML = "";
            document.getElementById('description_error').innerHTML = "";
            document.getElementById('quantity_error').innerHTML = "";
            document.getElementById('price_error').innerHTML = "";
            document.getElementById('img_error').innerHTML = "";
        });

        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        cancelButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (event) => {
            if (event.target == modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
@endsection