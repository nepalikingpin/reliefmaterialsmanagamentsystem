<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class requestcontroller extends Controller {

public function insert(Request $request){
$address = $request->input('address');
$contact = $request->input('contact');
$materials = $request->input('materials');
$mode = $request->input('mode');
$date = $request->input('date');

$data=array("address"=>$address,"contact"=>$contact,"materials"=>$materials,"mode"=>$mode,"date"=>$date);
DB::table('request')->insert($data);

return redirect('/affected');
}
}
