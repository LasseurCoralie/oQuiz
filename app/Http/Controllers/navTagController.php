<?php

namespace App\Http\Controllers;

use App\Models\Tag;


class MainController extends Controller {

    public function homePage()
    {
        $tags = Tag::all();

        return view('partials.tags', [
          'tags' => $tags
        ]);  
    }
}