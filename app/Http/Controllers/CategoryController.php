<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
	{
		$title = 'Category Page';
		$rows = Category::all(); // select * from categories
        return view('category.index', [
			'title' => $title,
			'categories' => $rows
        ]);
	}

	public function create()
	{
		$title = 'Create new category';
		return view('category.create', [
			'title' => $title
		]);
	}

	public function store()
	{
		// dapetin request dari form
		// request()->all()

		// insert ke database
		// insert into categories a, b values a, b
		Category::create([
			'name' => request('name'),
			'description' => request('description')
		]);

		// direct ke halaman index
		return redirect('/category');
	}
}
