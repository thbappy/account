<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'slug'        => $this->slug,
            'description' => $this->description,
            'language'    => $this->language,
            'parent_id'   => $this->parent_id,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
            'children'    => CategoryResource::collection($this->whenLoaded('children')),
        ];
    }
}
