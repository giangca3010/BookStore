<?php


namespace App\Http\Repository;
use Illuminate\Support\Facades\DB;


class LoginModel
{
    const TABLE_NAME = 'users';
    public function getUserByEmail($email)
    {
        dd($email);
        return DB::table(self::TABLE_NAME)
            ->where('email',$email)
            ->first()
            ;
    }

}