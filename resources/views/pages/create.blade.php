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
                  {{-- hx-on::after-request="this.reset()" --}}
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