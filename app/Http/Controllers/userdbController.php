<?php

namespace App\Http\Controllers;

use App\Models\userdb;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class userdbController extends Controller
{
    public function index()
    {
        return view("userDb.userData");
    }
    public function create()
    {
        return view("userDb.new_user");
    }
    public function store(Request $request)
    {
        $pohotoName='';
        if($photo=$request->file('photo')){
        $photoName=time().'-'.uniqid().'.'.getClientOriginalExtension();   
    $photo->move('photo/userdb',$photoName);    
    }
    userdb::create([
        'name'=> $request->name,
        'photo'=> $photoName
    ]);
}
     
}



