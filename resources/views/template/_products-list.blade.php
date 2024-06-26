@foreach ($products as $prod)
    <div class='p-4 bg-white border border-gray-200 rounded-lg shadow-md w-72'>
        <img src={{$prod->imgUrl}}l alt='$prod->name' class='rounded-lg mb-4'>
        <h3 class='text-xl font-semibold text-gray-900'>{{$prod->name}}</h3>
        <div class='text-gray-700'>{{$prod->description}}</div>
        <div class='flex justify-between mt-2'>
            <div class='text-gray-900'>Quantity: {{$prod->quantity}}</div>
            <div class='text-gray-900'>Price: {{$prod->price}}</div>
        </div>
    </div> 
@endforeach