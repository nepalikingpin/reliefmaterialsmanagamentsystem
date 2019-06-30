<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class affectedviewcontroller extends Controller {

public function index(){
$users = DB::select('select * from request');
return view('affected',['users'=>$users]);
}
}
