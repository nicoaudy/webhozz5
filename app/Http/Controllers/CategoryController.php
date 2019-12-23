<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Category Page';
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
