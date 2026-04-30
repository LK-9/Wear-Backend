<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::with(['products' => function ($query) {
            $query->where('is_active', true)
                ->orderByDesc('created_at')
                ->limit(10);
        }])
            ->has('products')
            ->orderBy('name')
            ->limit(4)
            ->get();

        $products = Product::where('is_active', true)
            ->orderByDesc('created_at')
            ->limit(10)
            ->get();

        return view('welcome', compact('products', 'categories'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function error()
    {
        return view('404');
    }
}
