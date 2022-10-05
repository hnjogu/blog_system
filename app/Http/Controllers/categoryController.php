<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\package;
use App\Models\category;
use Carbon\Carbon;
use DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Rules\UpperCase;
use Illuminate\Support\Facades\Validator;
use DataTables;


class categoryController extends Controller
{
    //
    public function index()
    {
        $datacat = new category;

        $datacat = category::orderBy('id','DESC')->get();

        return view('Admin.category.index',compact('datacat'))
        ->with('datacat', $datacat);
    }

        //ADD NEW category
    public function addcategory(Request $request){
         $validator = \Validator::make($request->all(),[
             'category_name'=>'required',
             'sub_category'=>'required|unique:categories',
             'slug'=>'required|unique:categories',
             //'sub_category'=>'required',
         ]);

         if(!$validator->passes()){
              return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{
             $cat = new category();
             $cat->category_name = $request->category_name;
             $cat->sub_category = $request->sub_category;
             $cat->slug = $request->slug;
             $cat->user_name =  (Auth::user()->name);
             $query = $cat->save();

             if(!$query){
                 return response()->json(['code'=>0,'msg'=>'Something went wrong']);
             }else{
                 return response()->json(['code'=>1,'msg'=>'New Category has been successfully saved']);
             }
         }
    }


        // GET ALL category
    public function getcategoryList(Request $request)
    {
          //$cat = category::all();
           $cat = category::orderBy('id','ASC')
                ->where('status','Available')
                ->get();
          
          //dd($cat->all());
          return DataTables::of($cat)
                              ->addIndexColumn()
                              ->addColumn('actions', function($row){
                                  return '<div class="btn-group">
                                                <button class="btn btn-sm btn-primary" data-id="'.$row['id'].'" id="editcategoryBtn">Update</button>
                                                <button class="btn btn-sm btn-danger" data-id="'.$row['id'].'" id="deletecategoryBtn">Delete</button>
                                          </div>';
                              })
                              ->addColumn('checkbox', function($row){
                                  return '<input type="checkbox" name="category_checkbox" data-id="'.$row['id'].'"><label></label>';
                              })
                         
                              ->rawColumns(['actions','checkbox'])
                              ->make(true);
    }

        //GET category DETAILS
    public function getcategoryDetails(Request $request)
    {
        $category_id = $request->category_id;
        $categoryDetails = category::find($category_id);
        return response()->json(['details'=>$categoryDetails]);
    }


        //UPDATE category DETAILS
    public function updatecategoryDetails(Request $request)
    {
        $category_id = $request->cid;

        $validator = \Validator::make($request->all(),[
            'category_name'=>'required',
            'sub_category'=>'required|unique:categories,sub_category,'.$category_id,
            'slug'=>'required|unique:categories,sub_category,'.$category_id,
            //'sub_category'=>'required',
        ]);

        if(!$validator->passes()){
               return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
             
            $cat = category::find($category_id);
            $cat->category_name = $request->category_name;
            $cat->sub_category = $request->sub_category;
            $cat->slug = $request->slug;
            $cat->user_name =  (Auth::user()->name);
            $query = $cat->save();

            if($query){
                return response()->json(['code'=>1, 'msg'=>'Category Details have Been updated']);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
            }
        }
    }

    // DELETE category RECORD
    public function deletecategory(Request $request)
    {
        $category_id = $request->category_id;
        //$query = category::orderBy('category_id','DESC')->first();
        //$query = category::find($category_id)->delete();
          
        $query = category::findOrFail($category_id);
        $query->update(['status' => ('Removed')]);
        $query->save();
        if($query){
            return response()->json(['code'=>1, 'msg'=>'category has been deleted from database']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
        }
    }


    public function deleteSelectedcategory(Request $request)
    {
       $category_ids = $request->category_ids;
       //category::whereIn('id', $category_ids)->delete();
       $query = category::whereIn('id', $category_ids);
       $query->update(['status' => ('Removed')]);
       //$query->save();
       return response()->json(['code'=>1, 'msg'=>'category have been deleted from database']); 
    }

}
