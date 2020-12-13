<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;

use App\Models\Product;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companyHome(){
        $data=Company::all();
        return view('company.company-home',compact('data'));
    }

    public function updateCompany($id,Request $request){
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/black/images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
        $data=Company::where('id',$id)->update([
            'name'=>$request['name'],
            'thumbnail'=>$imageDbPath
        ]);
        if($data){
            return redirect()->route('companyHome')->with('message','Updated Successfully');
        }else{
            return redirect()->route('companyHome')->with('message','SomeThing Went Wrong');

        }

    }

    public function companyDelete($id){
        $data=Company::where('id',$id)->delete();
        if($data){
            return redirect()->route('companyHome')->with('message','Deleted Successfully');
        }else{
            return redirect()->route('companyHome')->with('message','Something went Wrong');
        }
    }

    public function createCompany(Request $request){
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/black/images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
        $data=Company::create([
            'name'=>$request['name'],
            'thumbnail'=>$imageDbPath
        ]);

        if ($data){
            return redirect()->route('companyHome')->with('message','Category Created Successfully');
        }
    }

    public function addCompany(){

        return view('company.add-company');

    }

    public function companyEdit($id){
        $data=Company::where('id',$id)->get()->first();

        return view('company.company-edit',compact('data'));
    }
    public function companyDetails($id){

        $products=Product::where('company_id',$id)->paginate(7);
//        dd($products);
        return view('company.company-detail',compact('products'));
    }
}
