@foreach ($products as $prod)
    <div id="product_list" class='p-4 bg-white border border-gray-200 rounded-lg shadow-md w-72'>
        <img src={{$prod->imgUrl}}l alt='$prod->name' class='rounded-lg mb-4'>
        <h3 class='text-xl font-semibold text-gray-900'>{{$prod->name}}</h3>
        <div class='text-gray-700'>{{$prod->description}}</div>
        <div class='flex justify-between mt-2'>
            <div class='text-gray-900'>Quantity: {{$prod->quantity}}</div>
            <div class='text-gray-900'>Price: {{$prod->price}}</div>
        </div>
        <div class="item-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" hx-get='api/products/edit/{{ $prod->id }}' hx-target='#editModal' hx-swap="innerHTML">EDIT</button>
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" hx-delete='/api/product/{{ $prod->id }}' hx-confirm='Confirm' hx-swap="innerHTML"
                hx-target="#product_list">X</button>
        </div>
    </div> 

    <div id="addProductMessage" hx-swap-oob="true">
        <div class="bg-green-200 text-green-800 p-2 rounded">
            {{ $msg }}
        </div>
    </div>
@endforeach