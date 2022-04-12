<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;
use App\Models\User;
use App\Models\content;
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
//use Alert;
use SweetAlert;
use RealRashid\SweetAlert\Facades\Alert;

class contentcontroller extends Controller
{
    //
    public function index(Request $request)
    {
        $datacontect = new content;

        $datacontect = content::orderBy('content_id','DESC')
         ->where('user_id', Auth::id())
         // ->with('category')
         ->where('status','Available')
         ->get();
        return view('logistics.content.index',compact('datacontect'))
        ->with('datacontect', $datacontect);
    }
    public function logistics(Request $request)
    {

        return view('logistics.index');

    }
    public function create(Request $request)
    {
        $categorydata = DB::table('categories')
            //->where('status','Available')
            //->orderBy('kilometre')
            ->groupBy('category_name')
            ->get();
        return view('logistics.content.create')
        ->with('categorydata', $categorydata);
    }
    public function store(Request $request)
    {
       // 'content_id','user_id','category_id','content_title','description','photo','status',
        $validatedData = $request->validate([
            'content_title' => 'required|unique:content',
            'description' => 'required',  
            'slug' => 'required|unique:content',
            //'photo' => 'required',
            'category_name' => 'required',
            // 'amount' => 'required',
            // 'date' => 'required',
        ],
        [
            'content_title.required' => 'The Content Name title Needed',
            'description.required' => 'The description Needed',
            'category_name.required' => 'The category is Needed',
            'slug.required' => 'The Slug is Needed',
        ]); 


            $content = new content;
            $content->content_title =  $request->get('content_title');
            $content->user_id =  (Auth::user()->id);
            $content->category_name =  $request->get('category_name');
            $content->slug =  $request->get('slug');
            $content->description =  $request->get('description');
            $content->save();
        return redirect('/cont/ent/li/st')->withSuccess('Content created successfully!');

        //return redirect('/cont/ent/li/st')->with('message','Content created successfully'); 
    }


    public function edit(Request $request, $content_id)
    {
        $categorydata = DB::table('categories')
            //->where('status','Available')
            ->groupBy('category_name')
            ->get();
        $content_id =DB::table('content')->where('content_id', $content_id)->get();

        return view('logistics.content.edit')

        ->with('content_id', $content_id)
        ->with('categorydata', $categorydata);

    }
    public function update(Request $request, $content_id)
    {
       // 'content_id','user_id','category_id','content_title','description','photo','status',

        $validatedData = $request->validate([
            'content_title' => 'required',
            //'content_title' => 'required|unique:content,'.$content_id,
            'description' => 'required',
            'slug' => 'required',
            //'photo' => 'required',
            'category_name' => 'required',
        ],
        [
           'content_title.required' => 'The Content Name title Needed',
           'description.required' => 'The description Needed',
           'category_name.required' => 'The category is Needed',
           'slug.required' => 'The Slug is Needed',
        ]); 


            $content = content::findOrFail($content_id);
            $content->content_title =  $request->get('content_title');
            $content->user_id =  (Auth::user()->id);
            $content->category_name =  $request->get('category_name');
            $content->slug =  $request->get('slug');
            $content->description =  $request->get('description');
            $content->save();
            

        //return redirect('/cont/ent/li/st')->withToastSuccess('Content Updated successfully!');
        return redirect('/cont/ent/li/st')->withSuccess('Content Updated successfully!');

        //return redirect('/cont/ent/li/st')->with('success','Content created successfully'); 
    }
    public function destroy(Request $request, $content_id)
    {
        $content_destroy = new content;

          $content_destroy = content::findOrFail($content_id);
          $content_destroy->update(['status' => ('Disabled')]);
          $content_destroy->save();

        return redirect('/cont/ent/li/st')->withSuccess('Content Deleted successfully!');
    }
    public function republish(Request $request, $content_id)
    {
        $content_destroy = new content;

          $content_destroy = content::findOrFail($content_id);
          $content_destroy->update(['status' => ('Available')]);
          $content_destroy->save();

        return redirect('/cont/ent/li/st')->withSuccess('Content Deleted successfully!');
    }
}
