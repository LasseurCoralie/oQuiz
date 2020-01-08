<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\AppUser;
use Illuminate\Http\Response;


class TagController extends Controller
{
    public function quiz($id)
    {

        $tagsName = Tag::all();

        $tags = Tag::find($id);

        $users = AppUser::all();

        if (! isset($tags)) {
            // abort(404);
            abort(Response::HTTP_NOT_FOUND);
        }

        return view(
            'tagQuiz',
            [
                'tags'   => $tags,
                'tagsName' => $tagsName,
                'users' =>$users
            ]
        );
    }

}
