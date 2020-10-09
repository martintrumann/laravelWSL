<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller {
	public function index(){
		$orders = Order::query();

		if(request()->has("sort")){
			$books->orderBy(request()->query("sort"), request()->query("asc") ? "asc" : "desc")->paginate(15);
		}

		return view("orders", ["orders"=> $orders->paginate(15), "asc" => request()->query("asc")]);
	}
}
