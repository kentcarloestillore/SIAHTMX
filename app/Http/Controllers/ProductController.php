<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::orderBy('name');

        if ($request->filter) {
            $filter = $request->filter;
            $products->where(function ($query) use ($filter) {
                $query->where('name', 'like', "%$filter%")
                      ->orWhere('description', 'like', "%$filter%");
            });
        }

        $html = "";

        foreach($products->get() as $prod){
            $html .= "
                    <div class='p-4 bg-white border border-gray-200 rounded-lg shadow-md w-72'>
                        <img src='$prod->imgUrl' class='rounded-lg mb-4'>
                        <h3 class='text-xl font-semibold text-gray-900'>$prod->name</h3>
                        <div class='text-gray-700'>$prod->description</div>
                        <div class='flex justify-between mt-2'>
                            <div class='text-gray-900'>Quantity: $prod->quantity</div>
                            <div class='text-gray-900'>Price: $prod->price</div>
                        </div>
                    </div>
                ";
        }

        return response($html);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'imgUrl' => 'required|url',
        ]);
    
        if($validator->fails()) {
            $products = Product::orderBy('name')->get();
            return view('template._create-products-error', ['errors'=>$validator->errors(), 'products'=>$products]);
        }
    
        Product::create($request->all());
        $products = Product::orderBy('name')->get();
    
        return  view('template._products-list', ['products' => $products]);
    }
}
