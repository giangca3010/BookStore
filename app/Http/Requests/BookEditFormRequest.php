<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookEditFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|',
            'description'       => 'required|',
            'content'           => 'required|',
            'fileBook'          => 'file|mimes:pdf|max:25600',
            'thumbnail'         => 'image|mimes:jpeg,png,bmp,gif,svg|max:2048|min:150',
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'Trường này là trường bắt buộc phải nhập',

            'description.required'      => 'Trường này là trường bắt buộc phải nhập',

            'content.required'          => 'Trường này là trường bắt buộc phải nhập',

            'fileBook.required'         => 'Bạn chưa chọn file sách để upload lên',
//            'fileBook.file'             => 'Bạn chưa chọn file sách đúng định dạng upload lên',
            'fileBook.mimes'            => 'Bạn chọn file sách không đúng định dạng (Hãy chọn file PDF để upload)',
            'fileBook.max'              => 'Bạn chọn file sách với dung lượng quá lớn để upload (Dung lượng file < 25MB)',

            'thumbnail.required'        => 'Bạn chưa chọn file ảnh của sách để upload lên',
//            'thumbnail.image'           => 'Bạn chọn file ảnh với định các định dạng jpeg, png, bmp, gif, svg',
            'thumbnail.mimes'           => 'Bạn chọn file ảnh của sách không đúng định dạng',
            'thumbnail.max'             => 'Bạn chọn file ảnh quá dung lượng cho phép là 2MB',
            'thumbnail.min'             => 'Bạn chọn file ảnh dung lượng quá thấp (dung lượng ảnh > 150KB)',
        ];
    }
}
