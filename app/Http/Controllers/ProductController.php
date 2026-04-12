<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage(Request $request)
    {
        $query = Product::with('category')->where('is_active', true);

        if ($request->has('search') && !empty($request->search)) {
            $query->where(function ($sub) use ($request) {
                $sub->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->has('category') && !empty($request->category)) {
            $query->where('category_id', $request->category);
        }

        if ($request->has('min_price') && is_numeric($request->min_price)) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->has('max_price') && is_numeric($request->max_price)) {
            $query->where('price', '<=', $request->max_price);
        }

        $sortBy = $request->get('sort', 'name');
        $sortDirection = $request->get('direction', 'asc');
        $query->orderBy($sortBy, $sortDirection);

        $products = $query->paginate(12)->withQueryString();
        $categories = Category::all();

        return view('shop-page', compact('products', 'categories'));
    }

    public function productDetails($slug)
    {
        $product = Product::with(['category', 'reviews.user'])->where('slug', $slug)->firstOrFail();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->limit(4)
            ->get();

        return view('shop-detail', compact('product', 'relatedProducts'));
    }
}
