<?php

namespace App\Http\Controllers;

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
        dd($request->all());
        return back();
    }
}
