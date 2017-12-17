<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;

class PageController extends Controller
{
    public function page($categorySlug, $pageSlug)
    {
        $category = Category::where('slug', '=', $categorySlug)->firstOrFail();

        $page = Page::where('slug', $pageSlug)->firstOrFail();

        return view('page', compact('category', 'page'));
    }
}
