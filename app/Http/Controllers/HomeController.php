<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Bookmark;

class HomeController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::all();

        return view('welcome', compact('bookmarks'));
    }
}
