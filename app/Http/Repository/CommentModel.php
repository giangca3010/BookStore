<?php
/**
 * Created by PhpStorm.
 * User: thanhvuminh
 * Date: 7/4/19
 * Time: 10:20 AM
 */

namespace App\Http\Repository;
use Illuminate\Support\Facades\DB;

class CommentModel
{
    const TABLE_NAME = 'comments';

    public function getComment()
    {
        return DB::table(self::TABLE_NAME)
            ->join('customers','comments.customer_id' , '=' ,'customers.id')
            ->join('books' ,'comments.book_id','=' ,'books.id')
            ->select('comments.*','customers.name_customer','books.name')
            ->get()
            ;
    }
    public function insertComment($rawData)
    {
        return DB::table(self::TABLE_NAME)
            ->insert($rawData)

        ;
    }

}