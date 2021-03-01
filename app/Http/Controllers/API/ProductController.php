<?php

namespace App\Http\Controllers\API;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Print_;

class ProductController extends Controller
{
    public function index(Request $request){
        $product = Product::with('user')->paginate(20);

        if($request->has('by_category') && $request->has('by_price')){
            return response()->json([
                "api_message" => "failed : Choose one order option",
            ],400);
        }

        if($request->has('by_category')){
            if($request->has('is_ascending')){
                if($request->is_ascending == 1){
                    $product = Product::orderBy('category_id','ASC')->paginate(20);
                }else if($request->is_ascending == 0){
                    $product = Product::orderBy('category_id','DESC')->paginate(20);
                }
            }
        }

        if($request->has('by_price')){
            if($request->has('is_ascending')){
                if($request->is_ascending == 1){
                    $product = Product::orderBy('price','ASC')->paginate(20);
                }else if($request->is_ascending == 0){
                    $product = Product::orderBy('price','DESC')->paginate(20);
                }
            }
        }

        return response()->json([
            "api_message" => "Success : Listed all products",
            "products" => $product
        ],200);

    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'price' => 'required|integer',
            'category_id' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $product = Product::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        return response()->json([
            "api_message" => "Success : Success adding product",
            "data" => $product
        ],201);
    }



}
