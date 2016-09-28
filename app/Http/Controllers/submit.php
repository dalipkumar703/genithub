<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use DB;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class submit extends Controller
{
 public function submit(Request $request)
 {
  $this->validate($request,[
		'name' => 'required',
		'email' => 'required',
		'phone' => 'required|numeric',
		'message' => 'required',
		]);
       $data=array(
		  'name'=>$request->input('name'),		
		'email'=>$request->input('email'),
		'phone' =>$request->input('phone'),
		'msg' =>$request->input('message'),
		  );
		  Mail::send('email.submit',$data,function($m) use($data) {
			$m->to('genithub@gmail.com')->subject('Contact form');
		  });
   return view('index')->with('info','Thanku for contact Us.Our team response you with in next working day.');
        
 }
  public function getInTouch(Request $request)
 {
  $this->validate($request,[
		'name1' => 'required',
		'phone1' => 'required|numeric',
                 'service' => 'required',
                 'reach'=> 'required',
		]);
       $data=array(
		  'name'=>$request->input('name1'),		
		'phone' =>$request->input('phone1'),
                 'service'=>$request->input('service'),
                 'reach' => $request->input('reach'),
		'msg' =>$request->input('msg1'),
		  );
		  Mail::send('email.getintouch',$data,function($m) use($data) {
			$m->to('genithub@gmail.com')->subject('Get in touch');
		  });
   return view('index')->with('info','Thanku for contact Us.Our team response you with in next working day.');
        
 }
 
 public function index1()
 {
  return view('template/default')->with('info','hi');
 }
}

?>