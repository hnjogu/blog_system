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
         ->where('status','publish')
         ->orwhere('status','Not Available')
         ->orwhere('status','Draft')
         ->get();
        $Published = content::orderBy('content_id','DESC')
         ->where('user_id', Auth::id())
         // ->with('category')
         ->where('status','publish')
         ->get();
        $Draftpost = content::orderBy('content_id','DESC')
         ->where('user_id', Auth::id())
         // ->with('category')
         ->where('status','Draft')
         ->get();
        $Disabledpost = content::orderBy('content_id','DESC')
         ->where('user_id', Auth::id())
         // ->with('category')
         ->where('status','Not Available')
         ->get();
        return view('logistics.content.index',compact('datacontect'))
        ->with('Published', $Published)
        ->with('Draftpost', $Draftpost)
        ->with('Disabledpost', $Disabledpost)
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
            'sub_category' => 'required',
            // 'date' => 'required',
        ],
        [
            'content_title.required' => 'The Content Name title Needed',
            'description.required' => 'The description Needed',
            'category_name.required' => 'The category is Needed',
            'slug.required' => 'The Slug is Needed',
        ]); 
        if ($request->has('draft')) {
                $content = new content;
                $content->content_title =  $request->get('content_title');
                $content->user_id =  (Auth::user()->id);
                $content->category_name =  $request->get('category_name');
                $content->sub_category =  $request->get('sub_category');
                $content->slug =  $request->get('slug');
                $content->description =  $request->get('description');
                $content->summary =  $request->get('summary');
                $content->code_content =  $request->get('code_content');
                $content->status = 'Draft';
                $content->save();
        } else if ($request->has('publish')) {
                $content = new content;
                $content->content_title =  $request->get('content_title');
                $content->user_id =  (Auth::user()->id);
                $content->category_name =  $request->get('category_name');
                $content->sub_category =  $request->get('sub_category');
                $content->slug =  $request->get('slug');
                $content->description =  $request->get('description');
                $content->summary =  $request->get('summary');
                $content->code_content =  $request->get('code_content');
                $content->status = 'publish';
                $content->save();
        }


            // $content = new content;
            // $content->content_title =  $request->get('content_title');
            // $content->user_id =  (Auth::user()->id);
            // $content->category_name =  $request->get('category_name');
            // $content->sub_category =  $request->get('sub_category');
            // $content->slug =  $request->get('slug');
            // $content->description =  $request->get('description');
            // $content->summary =  $request->get('summary');
            // $content->code_content =  $request->get('code_content');
            // $content->save();
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

        if ($request->has('draft')) {
                $content = content::findOrFail($content_id);
                $content->content_title =  $request->get('content_title');
                $content->user_id =  (Auth::user()->id);
                $content->category_name =  $request->get('category_name');
                $content->sub_category =  $request->get('sub_category');
                $content->slug =  $request->get('slug');
                $content->description =  $request->get('description');
                $content->summary =  $request->get('summary');
                $content->code_content =  $request->get('code_content');
                $content->status = 'Draft';
                $content->save();
        } else if ($request->has('publish')) {
                $content = content::findOrFail($content_id);
                $content->content_title =  $request->get('content_title');
                $content->user_id =  (Auth::user()->id);
                $content->category_name =  $request->get('category_name');
                $content->sub_category =  $request->get('sub_category');
                $content->slug =  $request->get('slug');
                $content->description =  $request->get('description');
                $content->summary =  $request->get('summary');
                $content->code_content =  $request->get('code_content');
                $content->status = 'publish';
                $content->save();
        }
            
        return redirect('/edi/tcont/ent/'.$content->content_id)->withSuccess('Content Updated successfully!');
        //return redirect('/cont/ent/li/st')->withSuccess('Content Updated successfully!');
        //return redirect('/cont/ent/li/st')->withToastSuccess('Content Updated successfully!');
        
        //return redirect('/cont/ent/li/st')->withSuccess('Content Updated successfully!');

        //return redirect('/cont/ent/li/st')->with('success','Content created successfully'); 
    }
    public function destroy(Request $request, $content_id)
    {
        $content_destroy = new content;

          $content_destroy = content::findOrFail($content_id);
          $content_destroy->update(['status' => ('Deleted')]);
          $content_destroy->save();

        return redirect('/cont/ent/li/st')->withSuccess('Content Deleted successfully!');
    }
    public function republish(Request $request, $content_id)
    {
        $content_publish = new content;

          $content_publish = content::findOrFail($content_id);
          $content_publish->update(['status' => ('publish')]);
          $content_publish->save();

        return redirect('/cont/ent/li/st')->withSuccess('Content have been published successfully!');
    }
    public function unDraft(Request $request, $content_id)
    {
        $content_unpublished = new content;

          $content_unpublished = content::findOrFail($content_id);
          $content_unpublished->update(['status' => ('Draft')]);
          $content_unpublished->save();

        return redirect('/cont/ent/li/st')->withSuccess('Content saved as Draft successfully!');
    }
    public function Disable(Request $request, $content_id)
    {
        $content_unpublished = new content;

          $content_unpublished = content::findOrFail($content_id);
          $content_unpublished->update(['status' => ('Not Available')]);
          $content_unpublished->save();

        return redirect('/cont/ent/li/st')->withSuccess('Content Disbled successfully!');
    }
    function fetch(Request $request)
    {
        //$conservancy = Auth::user()->place;
        //$county = Auth::user()->county;button
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('categories')
            ->where($select, $value)
            //->where('conservancy', $conservancy)
            //->where('county', $county)
            ->groupBy($dependent)
            ->get();
            $output = '<option value="">Select '.ucfirst($dependent).'</option>';
            foreach($data as $row)
             {
              $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
             }
             echo $output;
    }
    public function upload(Request $request)
        {

        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
       
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
       
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
       
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
       
            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
     
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore); 
            $msg = 'Image successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
              
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
        }
        // if($request->hasFile('upload')) {
        //     $originName = $request->file('upload')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $extension = $request->file('upload')->getClientOriginalExtension();
        //     $fileName = $fileName.'_'.time().'.'.$extension;

        //     $request->file('upload')->move(public_path('upload/images'), $fileName);
   
        //     $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        //     $url = asset('upload/images/'.$fileName); 
        //     $msg = 'Image uploaded successfully'; 
        //     $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
        //     @header('Content-type: text/html; charset=utf-8'); 
        //     echo $response;
        // }
    }
}
