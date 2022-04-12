<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\content;
use App\Models\category;
use App\Models\coarses;
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

class Coarsescontroller extends Controller
{
    //
    public function index(Request $request)
    {
         $dataccoarse = new coarses;

        $dataccoarse = coarses::orderBy('coarse_id','DESC')
         ->where('user_id', Auth::id())
         // ->with('category')
         ->where('status','Available')
         ->get();
        return view('logistics.coarses.index',compact('dataccoarse'))
        ->with('dataccoarse', $dataccoarse);
    }
    public function create(Request $request)
    {
        $categorydata = DB::table('categories')
            //->where('status','Available')
            //->orderBy('kilometre')
            ->groupBy('category_name')
            ->get();
        return view('logistics.coarses.create')
        ->with('categorydata', $categorydata);
    }
    public function store(Request $request)
    {
       // 'coarse_id','category_name','user_id','coarses_title','coarse_link','status'
        $validatedData = $request->validate([
            'coarses_title' => 'required|unique:coarses',
            'coarse_link' => 'required',
            //'photo' => 'required',
            'category_name' => 'required',
            // 'amount' => 'required',
            // 'date' => 'required',
        ],
        [
            'coarses_title.required' => 'The Coarses Name title Needed',
            'coarse_link.required' => 'The Coarses Needed',
            'category_name.required' => 'The category is Needed',
        ]); 


            $coarses = new coarses;
            $coarses->coarses_title =  $request->get('coarses_title');
            $coarses->user_id =  (Auth::user()->id);
            $coarses->category_name =  $request->get('category_name');
            $coarses->coarse_link =  $request->get('coarse_link');
            $coarses->save();
        return redirect('/coa/rs/e')->withSuccess('Coarse created successfully!');

        //return redirect('/cont/ent/li/st')->with('message','Content created successfully'); 
    }
    public function edit(Request $request, $coarse_id)
    {
        $categorydata = DB::table('categories')
            //->where('status','Available')
            ->groupBy('category_name')
            ->get();
        $coarse_id =DB::table('coarses')->where('coarse_id', $coarse_id)->get();
        return view('logistics.coarses.edit')
        ->with('coarse_id', $coarse_id)
        ->with('categorydata', $categorydata);
    }
    public function dsvedit(Request $request, $coarse_id)
    {
        $categorydata = DB::table('categories')
            //->where('status','Available')
            ->groupBy('category_name')
            ->get();
        $coarse_id =DB::table('coarses')->where('coarse_id', $coarse_id)->get();

        return view('logistics.coarses.edit')

        ->with('coarse_id', $coarse_id)
        ->with('categorydata', $categorydata);

    }
    public function update(Request $request, $coarse_id)
    {
       // 'content_id','user_id','category_id','content_title','description','photo','status',
        $validatedData = $request->validate([
            'coarses_title' => 'required',
            'coarse_link' => 'required',
            'category_name' => 'required',
        ],
        [
            'coarses_title.required' => 'The Coarses Name title Needed',
            'coarse_link.required' => 'The Coarses Needed',
            'category_name.required' => 'The category is Needed',
        ]);  


            $coarses = coarses::findOrFail($coarse_id);
            $coarses->coarses_title =  $request->get('coarses_title');
            $coarses->user_id =  (Auth::user()->id);
            $coarses->category_name =  $request->get('category_name');
            $coarses->coarse_link =  $request->get('coarse_link');
            $coarses->save();
            

        //return redirect('/cont/ent/li/st')->withToastSuccess('Content Updated successfully!');
        return redirect('/coa/rs/e')->withSuccess('Coarse Updated successfully!');

        //return redirect('/cont/ent/li/st')->with('success','Content created successfully'); 
    }
    public function destroy(Request $request, $coarse_id)
    {
        $coarses_destroy = new coarses;

          $coarses_destroy = coarses::findOrFail($coarse_id);
          $coarses_destroy->update(['status' => ('Disabled')]);
          $coarses_destroy->save();

        return redirect('/coa/rs/e')->withSuccess('Coarse Deleted successfully!');
    }
}
