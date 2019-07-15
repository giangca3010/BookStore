<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repository\CommentModel;
use Illuminate\Support\Facades\DB;

class HomeAdminController extends Controller
{
    //
    public function countComment()
    {
        $commentModel = new CommentModel();
        $countComment = count($commentModel->getComment());
        return view('layout_admin',['countComment' => $countComment]);
    }
}
