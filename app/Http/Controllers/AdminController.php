<?php

namespace App\Http\Controllers;

use App\Stationary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function handleAdmin()
    {
        $stationary = DB::table('stationary')->paginate(6);
        return view('home',['stationary' => $stationary]);
    }

    public function edit($id)
    {
        $stationary = Stationary::where('id', $id)->first();
        return view('updatestationary', compact('stationary'));
    }
    public function update(Request $request,Stationary $id){

        $validatedData = $request->validate([
            'name' => 'required|unique:stationary|min:5',
            'description' => 'required|min:10',
            'stock' => 'required|integer|min:1',
            'price' => 'required|integer|min:5000'
        ]);


        $id->name = $request->name;
        $id->description = $request->description;
        $id->stock = $request->stock;
        $id->price = $request->price;
        $id->save();

        return back()->with('success', true);

//        Stationary::where('id', $id)->update([
//            'name' => $request->name,
//            'description' => $request->description,
//            'stock' => $request->stock,
//            'price' => $request->price,
//        ]);
    }

    public function add(Request $request){
//        dd($request->all());
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'type_id' => 'required',
            'stock' => 'required|integer|min:0',
            'price' => 'required|integer|min:5000',
        ]);

        $stationary = new Stationary($request->all());
//        $file = $request->file('image');
//        $nama_file = time()."_".$file->getClientOriginalName();
//        $tujuan_upload = 'images/type';
//        $file->move($tujuan_upload,$nama_file);
//        $stationary->image = $nama_file;
        $path = $request->file('image')->store('images/product', 'public');
        $stationary->image = $path;
        $stationary->save();
        return redirect()->route('home');


    }

    public function tambah(){
        return view('addstationary');
    }

    public function updatetype(){
        $stationarytype = DB::table('stationarytype')->get();
        return view('Admin.updatetype', ['stationarytype' => $stationarytype]);
    }
    public function addtype(){
        $stationarytype = DB::table('stationarytype')->get();
        return view('Admin.addtype', ['stationarytype' => $stationarytype]);
    }

}
