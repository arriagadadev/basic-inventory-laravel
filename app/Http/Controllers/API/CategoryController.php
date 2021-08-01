<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function getCategories() {
        return Category::select('id', 'name')->get();
    }
}
