<?php

namespace App\Http\Controllers\Books;

use App\Http\Repository\BookModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Requests\BookCreatFormRequest;
use App\Http\Requests\BookEditFormRequest;

class BookController extends Controller
{

    public function index()
    {
        $Books      = new BookModel();
        $listbook   = $Books->getAllBook();

        return view('admin.AllBook',[
            'books' => $listbook,
        ])
        ;
    }


    public function CreateBook(BookCreatFormRequest $request)
    {
        $rawData = array();

    // xu ly file anh
        $image              = $request['thumbnail'];
        $image_name         = $image->getClientOriginalName(); // lay ten file anh
        $upload_image_path  = 'fileImgBooks/'; // upload vào public có thu muc fileImgBooks
        $image_url          = $upload_image_path .  $image_name; // duong dan file anh
        $success_image      = $image->move($upload_image_path, $image_name); // luu file anh vao thu muc anh

    // Xu ly file sach de luu
        $fileBook           = $request['fileBook'];
        $file_name          = $fileBook->getClientOriginalName();
        $upload_file_path   = 'fileBooks/';
        $file_url           = $upload_file_path . $file_name;
        $success_file       = $fileBook->move($upload_file_path, $file_name);

    // truyen du lieu vao mang
        $rawData['name']        = $request['name']; // ten cuon sach
        $rawData['thumbnail']   = $image_url; // Hình ảnh cuốn sách
        $rawData['description'] = $request['description']; // Mô tả cuốn sách
        $rawData['content']     = $request['content']; // Nội dung cuốn sách
        $rawData['status']      = $request['status']; // Trạng thái
        $rawData['file']        = $file_url; // Upload fiel sách

        $books = new BookModel();
        $books->insertBook($rawData);
        return Redirect('AllBook');
    }


// delete book
    public function DeleteBook($bookId)
    {
        $bookModel = new BookModel();
        $bookModel->deleteBook($bookId);
        return Redirect('AllBook')->with('delete', 'Xoá sách thành công');
    }

// Edit book
    public function EditBook($bookId)
    {
        $Books      = new BookModel();
        $listbook   = $Books->getIdBook($bookId);
        return view('admin.editBook',[
            'books' => $listbook,
        ])
        ;
    }

//Creation Edit Book
    public function UploadBooks(BookEditFormRequest $request)
    {
        $BookId = $request['id'];
        $rawData = array();
    // xu ly file anh
        if($request['thumbnail'] !== null ){
            $image              = $request['thumbnail'];
            $image_name         = $image->getClientOriginalName(); // sinh ra ten file anh random
            $upload_image_path  = 'fileImgBooks/'; // upload vào public có thu muc fileImgBooks
            $image_url          = $upload_image_path . $image_name; // duong dan file anh
            $success_image      = $image->move($upload_image_path, $image_name); // luu file anh vao thu muc anh
            $rawData['thumbnail']   = $image_url;
        }
    // Xu ly file sach de luu
        if($request['fileBook'] !== null ){
            $fileBook           = $request['fileBook'];
            $file_name          = $fileBook->getClientOriginalName();
            $ext_file           = strtolower($fileBook->getClientOriginalExtension());
            $file_full_name     = $file_name . '.' . $ext_file;
            $upload_file_path   = 'fileBooks/';
            $file_url           = $upload_file_path . $file_full_name;
            $success_file       = $fileBook->move($upload_file_path, $file_full_name);
            $rawData['file']        = $file_url; // Upload fiel sách
        }
    // truyen du lieu vao mang
        $rawData['name']        = $request['name']; // ten cuon sach
        $rawData['description'] = $request['description']; // Mô tả cuốn sách
        $rawData['content']     = $request['content']; // Nội dung cuốn sách
        $rawData['status']      = $request['status']; // Trạng thái

        $books = new BookModel();
        $books->updateBook($rawData, $BookId);
        return Redirect('AllBook');
    }

// view Books in page home voi sach
    public function ViewBookInHome()
    {
        $bookModel  = new BookModel();
        $bookHighlights   = $bookModel->getAllBookHighlightsInHome();
        $NewBook = $bookModel->getAllNewBookInHome();
        return view('page.home',
        [
            'ViewBookHighlights' => $bookHighlights,
            'ViewNewBook' => $NewBook,
        ]);
    }


}
