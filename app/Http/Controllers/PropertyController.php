<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPropertiesRequest;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(SearchPropertiesRequest $request)
    {
        $query = Property::query();
        if ($request->validated('price')) {
            $query->where('price', '<=', $request->validated('price'));
        }
        if ($request->validated('surface')) {
            $query->where('surface', '>=', $request->validated('surface'));
        }
        if ($request->validated('rooms')) {
            $query->where('rooms', '>=', $request->validated('rooms'));
        }
        if ($request->validated('title')) {
            $query->where('title', 'like', "%{$request->validated('title')}%");
        }

        $properties = Property::paginate(16);
        return view('property.index', [
            'properties' => $query->paginate(16),
            'input' => $request->validated(),
        ]);
    }

    public function show(string $slug, Property $property)
    {

    }
}
