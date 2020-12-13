<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryHome(){
    $data=Category::all();
        return view('category.category-home',compact('data'));
    }

    public function updateCategory($id,Request $request){
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/black/images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }

        $data=Category::where('id',$id)->update([
            'name'=>$request['name'],
            'thumbnail'=>$imageDbPath
        ]);
        if($data){
        return redirect()->route('categoryHome')->with('message','Updated Successfully');
        }else{
            return redirect()->route('categoryHome')->with('message','SomeThing Went Wrong');

        }

        }

    public function categoryDelete($id){
        $data=Category::where('id',$id)->delete();
        if($data){
            return redirect()->route('categoryHome')->with('message','Deleted Successfully');
        }else{
            return redirect()->route('categoryHome')->with('message','Something went Wrong');
        }
    }

    public function createCategory(Request $request){
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/black/images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }

        $data=Category::create([
            'name'=>$request['name'],
            'thumbnail'=>$imageDbPath,
        ]);

        if ($data){
        return redirect()->route('categoryHome')->with('message','Category Created Successfully');
        }
    }

    public function addCategory(){

        return view('category.add-category');

    }

    public function categoryEdit($id){
        $data=Category::where('id',$id)->get()->first();

        return view('category.category-edit',compact('data'));
    }

            public function categoryDetail($id){
                $products=Product::where('category_id',$id)->paginate(7);

                return view('category.category-detail',compact('products'));

            }

}
