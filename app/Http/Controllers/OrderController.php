<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
public function placeOrder(Request $request)
{

    $order = Order::create([
        "user_id" => Auth::id(),
        "address" => $request['address'],
        "payment_type" => $request['payment'],
        "status" => 'pending',
    ]);
    if (session('cart')){
        foreach (session('cart') as $key=> $data){
         OrderDetails::create([
            "order_id" => $order->id,
            "product_id"=>$key,
            "name"=>$data['name'],
            "price"=>$data['price'],
            "quantity"=>$data['quantity'],
        ]);
        }

    };
    session()->forget('cart');
    return redirect()->route('welcome')->with('success','Order created successfully');
}

public function orderHome(){
    $data=Order::where('status','pending')->get();

    return view('order.orders-home',compact('data'));
}

    public function orderHistory(){
        $data=Order::where('status','approve')->get();

        return view('order.order-history',compact('data'));
    }

public function orderApprove($id){
    $data=Order::where('id',$id)->Update([
        "status"=>'approve',
    ]);
    return redirect()->back()->with('message','Approved successfully');
}

}
