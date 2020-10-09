<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller {
	public function index($book){
		$book = Book::with("author")->find($book);

		return view("book", ["book"=> $book]);
	}

	public function table(){
		$books = Book::query();
		if(request()->has("sort")){
			$books->orderBy(request()->query("sort"), request()->query("asc") ? "asc" : "desc")->paginate(15);
		}

		return view("books", ["books"=> $books->paginate(15), "asc" => request()->query("asc")]);
	}
}
