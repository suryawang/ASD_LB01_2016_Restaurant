<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\Food;
use App\HeaderTransaction;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function showMyOrder($id) {
        if(!isset($_COOKIE["order".$id])) {
            return view('enduser.view-order');
        }

        $seat = 0;
        if(isset($_COOKIE['seat']))
            $seat = $_COOKIE['seat'];
        $list = json_decode($_COOKIE["order".$id], true);
        return view('enduser.view-order', ['orders' => $list, 'seat'=> $seat]);
    }

    public function showAllOrder(){
        $trans = HeaderTransaction::with('getDetail')->get();
        return view('admin.view-order', ['orders' => $trans]);
    }

    public function addOrder($num, $id) {
        $list = array();
        if(isset($_COOKIE["order".$num])) {
            $list = json_decode($_COOKIE["order".$num]);
        }

        $food = Food::find($id);
        $order = new Order();
        $order->food = $food;
        $order->qty = 1;

        array_push($list, $order);
        setcookie("order".$num, json_encode($list), time()+3600, '/');
        return back();
    }

    public function submitOrder($num) {
        if(!isset($_COOKIE["order".$num])) {
            return view('enduser.view-order');
        }

        $list = json_decode($_COOKIE["order".$num], true);
        $header = new HeaderTransaction();
        $header->table_number = $num;
        $header->order_date = date("y-m-d H:i:s");
        $header->save();

        foreach($list as $order) {
            $detail = new DetailTransaction();
            $detail->transaction_id = $header->id;
            $detail->food_id = $order["food"]["id"];
            $detail->qty = $order["qty"];
            $detail->status = "no";
            $detail->save();
        }
        unset($_COOKIE["order".$num]);
        unset($_COOKIE['seat']);
        setcookie("seat", 0, time() - 3600, '/');
        setcookie("order".$num, "", time() - 3600, '/');
        return redirect("/");
    }
}

class Order {
    public $food;
    public $qty;
}
