<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class donorviewcontroller extends Controller {

public function index(){
$users = DB::select('select * from donor');
return view('donors',['users'=>$users]);
}
}
