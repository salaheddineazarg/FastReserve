<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch all categories from the database
        $categories = Category::all();

        // Return a response with the categories data
        return response()->json(['categories'=>$categories], 200);
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'type' => 'required|string', // Add any validation rules as needed
        ]);

        // Create a new category instance
        $category = new Category;
        $category->type = $request->type; // Assign the 'type' value from the request data

        // Save the category to the database
        $category->save();

        // Return a response or redirect as needed
        return response()->json(['message' => 'Category created successfully'], 201);
    }
}
