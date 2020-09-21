<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller {
	public function index(){
		if(request()->has("sort")){
			$books = Book::orderBy(request()->query("sort"), "asc")->paginate(15);
		}else{
			$books = Book::paginate(15);
		}

		return view("table", ["books"=> $books]);
	}
}
