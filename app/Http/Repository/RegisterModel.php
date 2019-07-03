<?php


namespace App\Http\Repository;
use Illuminate\Support\Facades\DB;

class RegisterModel
{
    const TABLE_NAME = 'users';
    public function adduser($dataRegister)
    {
        return DB::table(self::TABLE_NAME)
        ->insert($dataRegister)
            ;
    }

}