<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function listCategories()
    {
        $categories = Categories::all();

        return view('Admin.categories.listCategories')->with([
            'categories' => $categories
        ]);
    }

    public function createCategories()
    {
        return view('Admin.categories.createCategories');
    }

    public function storeCategories(Request $request)
    {
        // Validation
        $request->validate([
            'categoriesName' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $category = new Categories();
        $category->category_name = $request->categoriesName;
        $category->slug = Str::slug($request->categoriesName, '-');
        $category->status = $request->status;
        $category->save();

        return response()->json([
            'messageCreate' => 'Thêm mới danh mục thành công'
        ], 201);
    }

    public function detailCategories($categoryId)
    {
        $categoryById = Categories::select('category_id', 'category_name', 'status', 'created_at')
            ->where('category_id', '=', $categoryId)
            ->firstOrFail();

        return view('Admin.categories.detailCategories', compact('categoryById'));
    }

    public function editCategories($categoryId)
    {
        $categoryById = Categories::select('category_id', 'category_name', 'status')
            ->where('category_id', $categoryId)
            ->firstOrFail();

        return view('Admin.categories.editCategories', compact('categoryId', 'categoryById'));
    }

    public function updateCategories(Request $request, $categoryId)
    {
        // Validation
        $request->validate([
            'categoriesName' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $category = Categories::where('category_id', $categoryId)->firstOrFail();
        $category->category_name = $request->categoriesName;
        $category->slug = Str::slug($request->categoriesName, '-');
        $category->status = $request->status;
        $category->save();

        return response()->json(['messageUpdate' => true], 201);
    }

    public function deleteCategories($categoryId)
    {
        $category = Categories::where('category_id', $categoryId)->firstOrFail();
        $category->delete();

        return response()->json([
            'messageDeleteCategories' => 'Xóa danh mục thành công'
        ], 201);
    }
}

