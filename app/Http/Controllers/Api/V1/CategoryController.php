<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')
            ->whereNull('deleted_at')
            ->whereNull('parent_id')
            ->get();

        return response()->json([
            'status'  => true,
            'message' => 'Category list retrieved successfully',
            'data'    => CategoryResource::collection($categories),
        ]);
    }
    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();

        $category = Category::create($validated);

        return response()->json([
            'status'  => true,
            'message' => 'Category created successfully',
            'data'    => new CategoryResource($category),
        ], 201);

    }
    public function show(Category $category)
    {
        $category->load('children');

        return response()->json([
            'status'  => true,
            'message' => 'Category retrieved successfully.',
            'data'    => new CategoryResource($category),
        ]);
    }
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validated = $request->validated();

        $category->update($validated);

        return response()->json([
            'status'  => true,
            'message' => 'Category updated successfully.',
            'data'    => new CategoryResource($category),
        ]);
    }
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Category deleted successfully.',
        ], 200);
    }
}
