<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shopcart(){
        return view('shoppingcart');
    }

    public function transaction(){
        return view('transactionhistory');
    }
}
