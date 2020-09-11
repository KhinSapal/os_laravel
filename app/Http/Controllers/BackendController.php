<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class BackendController extends Controller
{
    public function dashboardfun($value='')
	{
		return view('backend.dashboard');//foldername .filename
	}

	public function index($value='')
    {
      $orders = Order::all();
      return view('Backend.orders.index',compact('orders'));
    }

    public function orderdetail($id)
    {
       $orderdetail = Order::find($id);

       return view('Backend.orders.orderdetail',compact('orderdetail'));
    }
}



