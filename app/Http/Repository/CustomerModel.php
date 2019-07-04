<?php
/**
 * Created by PhpStorm.
 * User: thanhvuminh
 * Date: 7/4/19
 * Time: 8:52 AM
 */

namespace App\Http\Repository;
use Illuminate\Support\Facades\DB;

class CustomerModel
{
    const TABLE_NAME = 'customers';

    public function getCustomer($customerId)
    {
        return DB::table(self::TABLE_NAME)
            ->where('id',$customerId)
            ->get()
            ;
    }
    public function updateCustomer( $customer_id )
    {
        $level_customer = 2;
        return DB::table(self::TABLE_NAME)
            ->where('id' ,$customer_id)
            ->update(['level_customer' => $level_customer ])
            ;
    }
}