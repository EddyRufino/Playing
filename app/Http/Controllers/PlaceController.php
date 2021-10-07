<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Tag;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function create()
    {
        return view('places.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $place = Place::create($data);

        $place->tags()->sync($request->tag_id);

        return back();
    }
}
