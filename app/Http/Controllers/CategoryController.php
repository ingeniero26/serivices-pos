<?php

namespace App\Http\Controllers;


use App\Models\CategoryModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function list(Request $request)
    {
        $data['getRecord'] = CategoryModel::getCategory();
        return view ('admin.category.list', $data);
    }
}
