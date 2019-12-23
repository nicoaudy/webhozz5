<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
		$title = 'Category Page';
		$rows = Category::all();
        return view('category.index', [
            'title' => $title
        ]);
	}

	public function create()
	{
		$title = 'Create new category';
		return view('category.create', [
			'title' => $title
		]);
	}
}
