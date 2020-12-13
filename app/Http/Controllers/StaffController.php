<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function staffHome(){
        $data=User::all();
        return view('staff.staff-home',compact('data'));
    }

    public function updateStaff($id,Request $request){
//        dd($request);
        $data=User::where('id',$id)->update([
            'f_name'=>$request['f_name'],
            'l_name'=>$request['l_name'],
            'Type'=>$request['type'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
            'age'=>$request['age'],
            'city'=>$request['city'],
            'address'=>$request['address'],
            'remember_token'=>$request['_token'],
        ]);
        if($data){
            return redirect()->route('staffHome')->with('message','Updated Successfully');
        }else{
            return redirect()->route('staffHome')->with('message','SomeThing Went Wrong');

        }

    }

    public function staffDelete($id){
        $data=User::where('id',$id)->delete();
        if($data){
            return redirect()->route('staffHome')->with('message','Deleted Successfully');
        }else{
            return redirect()->route('staffHome')->with('message','Something went Wrong');
        }
    }

    public function createStaff(Request $request){
        $data=User::create([
            'f_name'=>$request['f_name'],
            'l_name'=>$request['l_name'],
            'Type'=>$request['Type'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
            'age'=>$request['age'],
            'city'=>$request['city'],
            'address'=>$request['address'],
            'remember_token'=>$request['remember_token'],
        ]);

        if ($data){
            return redirect()->route('staffHome')->with('message','User Created Successfully');
        }
    }

    public function addStaff(){

        return view('staff.add-staff');

    }

    public function staffEdit($id){
        $data=User::where('id',$id)->get()->first();
        return view('staff.update-staff',compact('data'));
    }
}
