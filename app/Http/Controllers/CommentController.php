<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{

    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Return the list of comments
     * @return Illuminate\Http\Response
     */
    public function index()
    {

        $comments = Comment::all();
        // seccessResponse from ApiResponser
        return $this->successResponse($comments);
    }

    /**
     * Obtains and show one comment
     * @return Illuminate\Http\Response
     */
    public function show($comment)
    {
        $comment = Comment::findOrFail($comment);
        // seccessResponse from ApiResponser
        return $this->successResponse($comment);
    }

    //
}
