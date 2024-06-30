<?php

namespace App\Http\Controllers\Client;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    protected $sneaker;

    public function __construct()
    {
    }

    public function index()
    {
        $sneakers = Product::select('products.*', 'categories.category_name')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.category_id')
            ->orderBy('products.product_id', 'desc')
            ->get();

        $listCategories = Categories::limit(4)
            ->orderBy('category_id', 'desc')
            ->get();


        // Cách 2: viết truy vấn từng controller nếu dùng
        $listProductByCategories = [];

        foreach ($listCategories as $category) {
            $products = Product::select('products.*', 'categories.category_name')
                ->leftJoin('categories', 'products.category_id', '=', 'categories.category_id')
                ->where('products.category_id', $category->category_id)
                ->orderBy('products.product_id', 'desc')
                ->get();

            $listProductByCategories[$category->category_id] = $products;
        }

        return view('Client.home', compact('sneakers', 'listCategories', 'listProductByCategories'));
    }
}
