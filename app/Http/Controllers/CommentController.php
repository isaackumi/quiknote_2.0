<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function store(Request $request)
    {
//        dd($request);


        $this->validate($request,[
                'comment_name'=>'required',
            'comment_university'=>'required',
            'comment_message'=>'required',
            'note_id'=>'required'
        ]);

//        TODO: display error messages for post comments

        $comment = new Comment;
        $comment->comment_name = $request->input('comment_name');
        $comment->comment_university = $request->input('comment_university');
        $comment->comment_message = $request->input('comment_message');
        $comment->note_id = $request->input('note_id');

        $comment->save();
        return back()->with('success','Your review has been submitted successfully.');

    }
}
