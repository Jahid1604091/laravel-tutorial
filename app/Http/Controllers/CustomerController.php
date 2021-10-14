<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers =  DB::table('customers')->pluck('name');
        $total_customers =  DB::table('customers')->count();
        $customer_email =  DB::table('customers')->get()->where('email', 'has@yahoo.com');
        //  $first_customer =  DB::table('customers')->first();
        foreach ($customers as $cust) {
            echo $cust;
        }
    }
}
