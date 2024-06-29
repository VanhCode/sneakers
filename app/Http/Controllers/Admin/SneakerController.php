<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SneakerController extends Controller
{

    public function listSneaker()
    {
        $listProduct = Product::all();

        return view('Admin.sneakers.listSneaker', compact([
            'listProduct'
        ]));
    }

    public function createSneaker()
    {
        $listCategories = Categories::all();

        return view('Admin.sneakers.createSneaker')->with([
            'listCategories' => $listCategories
        ]);
    }

    public function storeSneaker(Request $request)
    {
        try {
            $product = new Product;
            $product->product_name = $request->productName;
            $product->price = $request->productPrice;
            $product->describe = $request->productDescribe;
            $product->category_id = $request->productCategories;
            $product->slug = str::slug($request->productName, '-');

            if ($request->hasFile('images')) {
                $images = $request->file('images');
                $imagePaths = [];

                foreach ($images as $image) {
                    $path = $image->storePublicly('public/products');
                    $imagePaths[] = Storage::url($path);
                }

                $product->image = implode(',', $imagePaths);
            }

            $product->save();

            $productId = $product->product_id;

            if ($request->has('productSize') && $request->has('productQuantity')) {
                $sizes = $request->productSize;
                $quantities = $request->productQuantity;

                foreach ($sizes as $key => $size) {
                    $variant = new Variant;
                    $variant->product_id = $productId;
                    $variant->size = $size;
                    $variant->quantity = $quantities[$key];
                    $variant->save();
                }
            }

            return response()->json(['successProduct' => true]);
        } catch (\Exception $e) {
            echo "Lỗi khi thêm dữ liệu: " .$e->getMessage();
            return response()->json(['errorStoreProduct' => true]);
        }


    }

    public function detailSneaker($sneakerId)
    {
        try {
            $productDetail = Product::where('product_id', $sneakerId)->firstOrFail();

            $categories = Categories::where('category_id', $productDetail->category_id)->firstOrFail();

            $variants = Variant::where('product_id', $productDetail->product_id)->get();

            return view('Admin.sneakers.detailSneaker', compact([
                'productDetail',
                'categories',
                'variants'
            ]));
        } catch (\Exception $e) {
            echo "Lỗi id sản phẩm không tồn tại: " .$e->getMessage();
            return response()->json(['errorIdProduct' => true]);
        }
    }

    public function editSneaker($sneakerId)
    {
        try {
            $listCategories = Categories::all();

            $productById = Product::where('product_id', $sneakerId)->firstOrFail();

            $categories = Categories::where('category_id', $productById->category_id)->firstOrFail();

            $variants = Variant::where('product_id', $productById->product_id)->get();

            return view('Admin.sneakers.editSneaker', compact([
                'listCategories',
                'productById',
                'categories',
                'variants',
                'sneakerId'
            ]));
        } catch (\Exception $e) {
            echo "Lỗi id sản phẩm không tồn tại: " .$e->getMessage();
            return response()->json(['errorIdProduct' => true]);
        }
    }

    public function updateSneaker(Request $request, $sneakerId)
    {
        try {
            $product = Product::where('product_id', $sneakerId)->firstOrFail();

            $product->product_name = $request->productName;
            $product->price = $request->productPrice;
            $product->describe = $request->productDescribe;
            $product->category_id = $request->productCategories;
            $product->slug = Str::slug($request->productName, '-');
            $product->save();

            $imagePaths = [];

            if ($request->has('remainingImages')) {
                $remainingImages = explode(',', $request->remainingImages);
                $imagePaths = array_merge($imagePaths, $remainingImages);
            }

            if ($request->hasFile('images')) {
                $images = $request->file('images');

                foreach ($images as $image) {
                    $path = $image->storePublicly('public/products');
                    $imagePaths[] = Storage::url($path);
                }
            }

            $product->image = implode(',', $imagePaths);
            $product->save();

            $productId = $product->product_id;

            if ($request->has('productSize') && $request->has('productQuantity')) {
                $sizes = $request->productSize;
                $quantities = $request->productQuantity;

                Variant::where('product_id', $productId)->delete();

                foreach ($sizes as $key => $size) {
                    $variant = new Variant;
                    $variant->product_id = $productId;
                    $variant->size = $size;
                    $variant->quantity = $quantities[$key];
                    $variant->save();
                }
            }

            return response()->json(['successUpdateProduct' => true], 201);

        } catch (\Exception $e) {
            echo "Lỗi khi cập nhật: " .$e->getMessage();
            return response()->json(['errorUpdateProduct' => true]);
        }


    }



    public function deleteSneaker($sneakerId)
    {
        try {
            $sneaker = Product::where('product_id', $sneakerId)->firstOrFail();

            $imagePaths = explode(',', $sneaker->image);

            foreach ($imagePaths as $path) {
                $fileName = basename($path);
                Storage::delete('public/products/' . $fileName);
            }

            $sneaker->delete();

            return response()->json(['successDeleteSneaker' => true], 201);
        } catch (\Exception $e) {
            echo "Lỗi khi xóa: " .$e->getMessage();
            return response()->json(['errorSneaker' => true]);
        }

    }
}
