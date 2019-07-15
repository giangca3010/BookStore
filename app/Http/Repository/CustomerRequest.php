<?php
/**
 * Created by PhpStorm.
 * User: thanhvuminh
 * Date: 7/4/19
 * Time: 9:18 AM
 */

namespace App\Http\Repository;

use Illuminate\Support\Facades\DB;
class CustomerRequest
{
    const TABLE_NAME = 'Customer_request';

    public function getCustomerRequest()
    {
        return DB::table(self::TABLE_NAME)
            ->join('customers', 'customers.id', '=', 'Customer_request.customer_id')
            ->where('level_customer' , 1)
            ->get();
    }
    public function insertRequestCustomer($rawData )
    {
        return DB::table(self::TABLE_NAME)
            ->insert($rawData);
    }
    public function deleteCustomer($customerId)
    {
        return DB::table(self::TABLE_NAME)
            ->join('customers', 'customers.id', '=', 'Customer_request.customer_id')
            ->where('customer_id',$customerId)
            ->delete()
            ;
    }

}