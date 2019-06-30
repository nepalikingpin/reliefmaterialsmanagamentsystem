<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class donorcontroller extends Controller {

public function insert(Request $request){
$name = $request->input('name');
$email = $request->input('email');
$contact = $request->input('contact');
$materials = $request->input('materials');
$address = $request->input('address');
$date = $request->input('date');
$data=array("name"=>$name,"email"=>$email,"contact"=>$contact,"materials"=>$materials,"address"=>$address,"date"=>$date);
DB::table('donor')->insert($data);

return redirect('/donors');
}
}
