<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;

class CategoryController extends Controller
{
    public function category($categorySlug)
    {
        $category = Category::where([
            ['slug', '=', $categorySlug],
            ['type', '=', 1]
        ])->firstOrFail();


        $pages = Page::get();

        return view('category', compact('pages'));
    }
}
