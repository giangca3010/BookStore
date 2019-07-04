<?php

namespace App\Http\Repository;


use Illuminate\Support\Facades\DB;

class BookModel
{
    const TABLE_NAME = 'books';
    const COUNT_ITEM_OF_PAGE = 10;

// Thêm sách vào trong data
    public function insertBook($rawData)
    {
        return DB::table(self::TABLE_NAME)
            ->insert($rawData)
        ;
    }

// List sach
    public function getAllBook()
    {
        return DB::table(self::TABLE_NAME)
            ->paginate(self::COUNT_ITEM_OF_PAGE)
        ;
    }

// delete sach
    public function deleteBook($bookId)
    {
        return DB::table(self::TABLE_NAME)
            ->where('id',$bookId)
            ->delete()
        ;
    }

// lay data tu id book
    public function getIdBook($bookId)
    {
        return DB::table(self::TABLE_NAME)
         ->where('id',$bookId)
         ->first()
        ;
    }

// update du lieu
    public function updateBook($rawData, $BookId)
    {
        return DB::table(self::TABLE_NAME)
            ->where('id',$BookId)
            ->update($rawData);
    }

// All Book in home
    public function getAllBookHighlightsInHome()
    {
        return DB::table(self::TABLE_NAME)
            ->where('status',1)
            ->get()
        ;
    }

    public function getAllNewBookInHome()
    {
        return DB::table(self::TABLE_NAME)
            ->where('status',2)
            ->get()
            ;
    }

    public function getBookInPageDetailBook($bookId)
    {
        return DB::table(self::TABLE_NAME)
            ->where('id', $bookId)
            ->get()
            ;
    }

}
