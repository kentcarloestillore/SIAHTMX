@include('template._products-list', ['products'=>$products])

<div id="name_error" hx-swap-oob="true" hx-on::after-request="this.reset()">
    <div class="text-red-800 rounded">
        <ul class="ms-2">
            @if($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="img_error" hx-swap-oob="true">
    <div class="text-red-800 rounded">
        <ul class="ms-2">   
            @if($errors->has('imgUrl'))
                <div class="error">{{ $errors->first('imgUrl') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="description_error" hx-swap-oob="true">
    <div class="text-red-800 rounded">
        <ul class="ms-2">
            @if($errors->has('description'))
                <div class="error">{{ $errors->first('description') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="price_error" hx-swap-oob="true">
    <div class="text-red-800 rounded">
        <ul class="ms-2">
            @if($errors->has('price'))
                <div class="error">{{ $errors->first('price') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="quantity_error" hx-swap-oob="true">
    <div class="text-red-800 rounded">
        <ul class="ms-2">
            @if($errors->has('quantity'))
                <div class="error">{{ $errors->first('quantity') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="addProductMessage" hx-swap-oob="true">
</div>