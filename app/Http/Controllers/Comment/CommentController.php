<?php

namespace App\Http\Controllers\Comment;

use App\Http\Repository\CommentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    public function getAllCommentAdmin()
    {
        $commentModel = new CommentModel();
        $comment = $commentModel->getComment();
        return view('admin.comment',['comment' => $comment]);

    }
}
