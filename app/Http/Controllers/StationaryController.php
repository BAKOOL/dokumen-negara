<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stationary;

class StationaryController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth')->only('viewstationary');
    }
    public function search(Request $request){
        $search = $request->search;
        $stationary = DB::table('stationary')->where('name','like',"%".$search."%")->paginate(6);

        return view('index', ['stationary' => $stationary]);
    }

    public function notebook(Request $request){
        $stationary = DB::table('stationary')->where('type_id', 'like', 4)->paginate(6);
        return view('index', ['stationary' => $stationary]);
    }
    public function pen(Request $request){
        $stationary = DB::table('stationary')->where('type_id', 'like', 1)->paginate(6);
        return view('index', ['stationary' => $stationary]);
    }
    public function ruler(Request $request){
        $stationary = DB::table('stationary')->where('type_id', 'like', 3)->paginate(6);
        return view('index', ['stationary' => $stationary]);
    }
    public function dictionary(Request $request){
        $stationary = DB::table('stationary')->where('type_id', 'like', 5)->paginate(6);
        return view('index', ['stationary' => $stationary]);
    }

    public function index(){
        $stationary = DB::table('stationary')->paginate(6);

        return view('home',['stationary' => $stationary]);
    }
    public function product($id){
        $stationary = Stationary::find($id);
        return view('/viewstationary', ['stationary' => $stationary]);



    }
}
