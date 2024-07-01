<?php

namespace App\Http\DataComposers;

use App\Models\Categories;
use Illuminate\View\View;

class CategoryComposer
{
    public function compose(View $view)
    {
        $categories = Categories::limit(5)->get();
        $view->with('categories', $categories);
    }
}
