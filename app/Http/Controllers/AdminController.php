<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;

class AdminController extends Controller
{
    public function view_catagory()
    {
        $data=catagory::all();
        return view('admin.catagory', compact('data'));
    }
    public function add_catagory(Request $request)
    {
        $data=new catagory;
        $data->catagory_name=$request->catagory;
        $data->save();
        return redirect()->back()->with('message','Catagory Added Successfully');
    }
    public function delete_catagory($id)
    {
$data=catagory::find($id);
$data->delete();
return redirect()->back()->with('message','Catagory Deletetd Successfully');
    }
    public function view_product()
    {
        $catagories= Catagory::all();
        return view('admin.product',compact('catagories'));
    }
    public function add_product(Request $request)
    {
       
    }
}
