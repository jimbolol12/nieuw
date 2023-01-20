<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main(){
        $allBooks = Book::all();
        return view('home', $allBooks);
    }
}
