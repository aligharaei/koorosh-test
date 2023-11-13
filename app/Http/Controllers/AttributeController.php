<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function addAttributeToCategory($categoryId)
    {
        $category = Category::find($categoryId);

        $attribute = new Attribute();
        $attribute->name = 'color';
        $attribute->value = 'red';

        $category->attributes()->save($attribute);

        return response()->json([
            'success' => true
        ]);
    }
}
