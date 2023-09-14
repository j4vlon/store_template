<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(Category $category): CursorPaginator
    {
       return $category->products()->cursorPaginate(10);
    }
}
