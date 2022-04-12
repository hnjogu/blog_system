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
use Illuminate\Support\Facades\Http;
use Redirect,Response;

use AshAllenDesign\LaravelExchangeRates\ExchangeRate;
 
use Guzzle\Http\Exception\ClientErrorResponseException;
class webController extends Controller
{
    //
    public function welcome()
    {
        $datablog = content::orderBy('updated_at','DESC')
          ->limit(2)
          //->whereDate('created_at', Carbon::today()->subDays(30))
         ->where('status','Available')
         ->get();
        $datacoarse = coarses::orderBy('updated_at','DESC')
          ->limit(2)
          //->whereDate('created_at', Carbon::today()->subDays(30))
         ->where('status','Available')
         ->get();

         // currency 
         //$data=Http::get('http://api.exchangeratesapi.io/v1/latest?access_key=a844972a41a4e4f4b3648a4147961a56&format=1')->json();
        $response = Http::acceptJson()
            ->get('http://api.exchangeratesapi.io/v1/latest?access_key=a844972a41a4e4f4b3648a4147961a56&format=1');
             //->get('https://freecurrencyapi.net/api/v2/latest');

        if($response->failed()){
            // Handle failure here
        }
        // Data was fetched successfully
        $currency_data = $response->json();
        // return $data['rates'];
        return view('welcome', compact('currency_data', 'datablog'));
        // ->with('data', $data)
        // ->with('datablog', $datablog);
    }
    public function datawelcome()
    {
        $datablog = content::orderBy('updated_at','DESC')
          ->limit(2)
          //->whereDate('created_at', Carbon::today()->subDays(30))
         ->where('status','Available')
         ->get();
        $datacoarse = coarses::orderBy('updated_at','DESC')
          ->limit(2)
          //->whereDate('created_at', Carbon::today()->subDays(30))
         ->where('status','Available')
         ->get();
         // currency 
         //$data=Http::get('http://api.exchangeratesapi.io/v1/latest?access_key=a844972a41a4e4f4b3648a4147961a56&format=1')->json();
        $response = Http::acceptJson()
            ->get('http://api.exchangeratesapi.io/v1/latest?access_key=a844972a41a4e4f4b3648a4147961a56&format=1');
             //->get('https://freecurrencyapi.net/api/v2/latest');

        $response = Http::withHeaders([
            "Authorization" => "Basic S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==",
        ])->acceptJson()->get("https://www.udemy.com/api-2.0/courses/"); // For Details add ID example 473160;

        return $response->json();

        if($response->failed()){
            // Handle failure here
        }
        // Data was fetched successfully
        $currency_data = $response->json();
        // return $data['rates'];
        return view('welcome', compact('currency_data', 'datablog'));
        // ->with('data', $data)
        // ->with('datablog', $datablog);
    }
    public function coarsetab() 
    {
                 //udemy coarses
        $response = Http::withHeaders([
            "Authorization" => "Basic S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==",
        ])->acceptJson()->get("https://www.udemy.com/api-2.0/courses/");
        //return $response->body();

        if($response->failed()){
            // Handle failure here
        }
        // coarses was fetched successfully
        $coarse_data = $response->json();
        //dd($coarse_data);


     return view('web.coarse.coarses', compact('coarse_data'));
 
    }  


    public function coarsedetails(Request $request, $id) 
    {
        //return "https://www.udemy.com/api-2.0/courses/{$id}/reviews/";
                 //udemy coarses
        $response = Http::withHeaders([
            "Authorization" => "Basic S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==S083b1pjUXFWOTRaWEVzNzVBakozeFA2VmVWTHNkVkdQZmw5T2VhQTpIRGh1aFNZY2Fkd3lqRElLcllKN3VZdExnREVsbU1kaE9FVjFwNWRvZ0pzVkhMVEVDM3BSR2JCU1gxV0RjV2VUT3dIWElMSlAzTG4xMmI3eHpNMEVnWnNGbVFEcFhSeGhxRkplN1hNeVJKM2lURzlyN1dXVERKeEhYRG90NW5ZYg==",
        ])->acceptJson()->get("https://www.udemy.com/api-2.0/courses/{$id}/reviews/");
        //return $response->body();

        if($response->failed()){
            // Handle failure here
        }

        var_dump($response);
        die();

        // coarses was fetched successfully
        $coarse_data = $response->json();
        //dd($coarse_data);


     return view('web.coarse.view', compact('coarse_data'));
 
    }    
 
    public function exchangeCurrency(Request $request) 
    {
         
      $amount = ($request->amount)?($request->amount):(1);
 
      $apikey = 'a844972a41a4e4f4b3648a4147961a56';
 
      $from_Currency = urlencode($request->from_currency);
      $to_Currency = urlencode($request->to_currency);
      $query =  "{$from_Currency}_{$to_Currency}";
 
      // change to the free URL if you're using the free version https://api.exchangeratesapi.io/v1/'.$endpoint.'?access_key='.$access_key.''
      $json = file_get_contents("https://api.exchangeratesapi.io/v1/convert?q={$query}&compact=y&apiKey={$apikey}");
 
      $obj = json_decode($json, true);
       
      $val = $obj["$query"];
 
      $total = $val['val'] * 1;
 
      $formatValue = number_format($total, 2, '.', '');
       
      $data = "$amount $from_Currency = $to_Currency $formatValue";
 
      echo $data; die;
 
 
     
   }
    public function blogs(Request $request, $slug)
    {
        $content =content::latest()
            ->where('slug', $slug)
            ->first();

        return view('web.blogs.index')

        ->with('content', $content);
        //->with('content', content::latest()->where('slug', $slug)->first());
    } 
    public function allblogs(Request $request) 
    {


            return view('web.blogs.all')
        ->with('content', content::orderBy('updated_at', 'DESC')->get());
 
     //return view('web.blogs.all')
        // return view('web.blogs.all', [
        //     'posts' => content::latest()->filter(
        //                 request(['search', 'category', 'author'])
        //             )->paginate(18)->withQueryString()
        // ]);
    } 
}
