<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SneakerController extends Controller
{
    public function sneakerList()
    {
        return view("Client.sneaker");
    }

    public function detailSneaker($sneakerSlug)
    {
        $sneakerDetail = Product::whereSlug($sneakerSlug)->firstOrFail();

        $variantProduct = Variant::where("product_id", $sneakerDetail->product_id)->get();

        $relatedProducts = Product::select('products.*', 'categories.category_name', 'categories.slug AS slugCate')
            ->leftJoin("categories", "products.category_id", "=", "categories.category_id")
            ->where("product_id", "<>", $sneakerDetail->product_id)
            ->orderBy("products.product_id", "desc")
            ->get();
        // Session::forget('cart');
        // $cartItems = Session::get('cart');

        // if(!empty($cartItems)) {
        //     echo "<pre>";
        //     print_r($cartItems);
        //     echo "</pre>";
        // }

        return view("Client.sneakerDetail", compact("sneakerDetail", "variantProduct", "relatedProducts", "sneakerSlug"));
    }
}
