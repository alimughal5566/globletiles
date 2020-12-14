<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productHome(){
        $data=Product::with('category')->get();
        return view('product.product-home',compact('data'));
    }
    public function addProducts(){
        $data=Category::all();
        $companies=Company::all();
        return view('product.addproduct',compact('data','companies'));

     }
    public function createProduct(Request $request){

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/black/images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
            $data=Product::create([
            'name'=>$request['name'],
            'category_id'=>$request['category_id'],
            'company_id'=>$request['company_id'],
            'description'=>$request['description'],
            'price'=>$request['price'],
            'thumbnail'=>$imageDbPath,

            ]);

            if ($data){

                return redirect()->route('productHome')->with('message','product created successfully');

            }else{

                return redirect()->route('productHome')->with('message','Something Went Wrong');

            }

    }
    public function updateProduct($id){
        $data=Category::all();
        $companies=Company::all();
        $product=Product::where('id',$id)->with('category')->get()->first();
        return view('product.update-product',compact('data','companies','product'));

    }
    public function productEdit(Request $request,$id){
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/black/images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
            $data=Product::where('id',$id)->update([
                'name'=>$request['name'],
                'category_id'=>$request['category_id'],
                'company_id'=>$request['company_id'],
                'description'=>$request['description'],
                'price'=>$request['price'],
                'thumbnail'=>$imageDbPath,

            ]);
    if($data){
        return redirect()->route('productHome')->with('message','product updated successfully');
    }else{
        return redirect()->route('productHome')->with('message','product updated successfully');
    };


    }
    public function productDelete($id){
        $data=Product::where('id',$id)->delete();
        if ($data){
            return redirect()->route('productHome')->with('message','product Deleted successfully');
        }else{
            return redirect()->route('productHome')->with('message','SomeThing Went Wrong');
        }

    }
    public function ProductDetails($id){
        $detail=Product::where('id',$id)->get()->first();
//        dd($detail);
        return view('product.product-detail',compact('detail'));
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->thumbnail
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->thumbnail
        ];
        session()->put('cart', $cart);
//        dd($cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
    public function checkOut(){
        return view('order.check-out');
    }



}
