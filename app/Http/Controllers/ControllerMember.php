<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Member as Member;

class ControllerMember extends Controller
{

    public function list_members(){
        $data = array( 'members'=>Member::all());
        return view('pages.list',$data);
    }

    public function delete_member($id){

        $member = Member::find($id)->delete();
        $data = array( 'members'=>Member::all());
        return view('pages.list',$data);
    }

    public function create_member(Request $request){

        $this->validate($request,['action'=>'required',
            'first_name'=>'required',
            'surname'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'date_of_birth'=>'required'
            ]);
        

    	$data = array([
    		'first_name' => $request['first_name'],
    		'surname' => $request['surname'],
    		'mobile' => $request['mobile'],
            'email' => $request['email'],
            'date_of_birth' => $request['date_of_birth'],
            'language' => $request['language'],
            'created_at' => date('Y-m-d')]);

    	$saved = DB::table('members')->insert($data);

    	$data = array( 'members'=>Member::all());
        return view('pages.list',$data);
    		

    }

    public function view_member($id){
        $data = array( 'member'=>Member::find($id));
        return view('pages.update',$data);
    }


    public function update_member(Request $request){

        $key = $request['key'];

        $this->validate($request,['action'=>'required',
            'first_name'=>'required',
            'surname'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'date_of_birth'=>'required'
            ]);
                

        $member = Member::find($key);
        $member->first_name = $request['first_name'];
        $member->surname = $request['surname'];
        $member->mobile = $request['mobile'];
        $member->email = $request['email'];
        $member->date_of_birth = $request['date_of_birth'];
        $member->language = $request['language'];
        $member->save();

        $data = array( 'members'=>Member::all());
        return view('pages.list',$data);
            

    }

}
