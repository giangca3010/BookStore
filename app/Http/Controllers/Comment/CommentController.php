<?php

namespace App\Http\Controllers\Comment;

use App\Http\Repository\BookModel;
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

    public function insertComment(Request $request )
    {
        $value = $request->session()->get('user');
        $valueId = $value->id;
        $rawData = array();
//        $bookModel = new BookModel();
        $bookId = $request['id_book'];
//        dd($bookId);
        $rawData['book_id'] = $bookId;
        $rawData['customer_id'] = $valueId;
        $rawData['content'] = $request['comm_details'];
        $commentModel = new CommentModel();
        $commentModel->insertComment($rawData);
        dd($commentModel->insertComment($rawData));

    }
}
