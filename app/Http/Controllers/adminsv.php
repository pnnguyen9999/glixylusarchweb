<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\upload;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class adminsv extends Controller
{
	public function upload(Request $request){

		 $tieude = $request->input('tieude');
		 $mota = $request->input('mota');
		 $imgurl_r = rand(11111, 999999);
		 $a=upload::create(['tieude'=>$tieude,'mota'=>$mota,'imgurl'=>$imgurl_r.'.jpg']);
		//$queryins = "INSERT INTO moc.modimg ('tieude', 'mota', 'imgurl') VALUES ('123', '123', 'imgurl');";
		//$name = input::file('fileToUpload')->getClientOriginalName();
		if (Input::hasFile('fileToUpload')) {
			$file = Input::file('fileToUpload');
			$file->move('img', $imgurl_r.'.'.$file->getClientOriginalExtension());
	}
	$data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get();
	return view('admin',$data);
	  //return 'File was moved.';
	//------------------------------

		// return view('test');
		//return view('home');
	}
	function getData() {
		$data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get();
			return view('admin',$data);
	}
	function rmData(Request $request) {
		$btn = $request->input('btn');
		$tieude = $request->input('title');
		$mota = $request->input('desc');
		$urlimg = $request->input('del');
		$stt = $request->input('stt');
		if ($btn == 'save'){
			if ($tieude != null){
				DB::table('modimg')->where('imgurl', $urlimg)->update(['tieude' => $tieude]);
			}
			if ($mota != null){
				DB::table('modimg')->where('imgurl', $urlimg)->update(['mota' => $mota]);
			}
			if ($stt != null){
				DB::table('modimg')->where('imgurl', $urlimg)->update(['stt' => $stt]);
			}
		}
		if ($btn == 'remove'){
			$urlimg = $request->input('del');
			DB::table('modimg')->where('imgurl', $urlimg)->delete();
			File::delete('img/'.$urlimg);
		}
		$data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get();
		return view('admin',$data);
	}
	function homeLoad() {
		  $data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get();
			return view('home',$data);
	}
	function artLoad($id) {
		$data['data'] = DB::table('modimg')->where('imgurl', $id)->get();
		return view('art',$data);
	}
	function login(Request $request) {
		$tk = $request->input('user');
		$mk = $request->input('pass');
		if (($tk == 'admin')&&($mk == 'moc$17')){
			$data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get();
			return view('admin',$data);
		} else {
			return view('login');
		}
	}

}
