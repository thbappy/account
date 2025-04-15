<?php

namespace App\Http\Resources\Category;

use App\Http\Resources\Category\CategoryResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => CategoryResource::collection($this->collection),
        ];
    }
}

