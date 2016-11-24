<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TicketsController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('ticket.create', compact('categories'));

    }
}
