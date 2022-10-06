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

    public static function getUdemyHttpClient()
    {
        return Http::withHeaders([
            "Authorization" => sprintf(
                "Basic %s", 
                base64_encode(sprintf(
                    "%s:%s", 
                    config('services.udemy.id'), 
                    config('services.udemy.secret'))
                )
            ),
        ])->acceptJson();
    }

    //
    public function welcome()
    {
        $datablog = content::orderBy('updated_at','DESC')
          ->limit(3)
          //->whereDate('created_at', Carbon::today()->subDays(30))
         ->where('status','publish')
         ->get();
        $datacoarse = coarses::orderBy('updated_at','DESC')
          ->limit(2)
          //->whereDate('created_at', Carbon::today()->subDays(30))
         ->where('status','publish')
         ->get();
        $dataheadline = content::orderBy('updated_at','DESC')
          ->limit(1)
         ->where('status','publish')
         ->where('category_name','Latest courses')
         ->get();
        $dataheadline_two = content::orderBy('updated_at','DESC')
          ->limit(2)
         ->where('status','publish')
         ->where('category_name','headline')
         ->get();

         // currency 
         //$data=Http::get('http://api.exchangeratesapi.io/v1/latest?access_key=a844972a41a4e4f4b3648a4147961a56&format=1')->json();
        $response = Http::acceptJson()
              ->get('https://open.er-api.com/v6/latest/USD');
           // ->get('http://api.exchangeratesapi.io/v1/latest?access_key=a844972a41a4e4f4b3648a4147961a56&format=1');//coreect one
             //->get('https://freecurrencyapi.net/api/v2/latest');

            

        if($response->failed()){
            // Handle failure here
        }
        // Data was fetched successfully
        $currency_data = $response->json();
        // return $data['rates'];
        return view('welcome', compact('currency_data', 'datablog', 'dataheadline', 'dataheadline_two'));
        // ->with('data', $data)
        // ->with('datablog', $datablog);
    }
    public function datawelcome()
    {
        $datablog = content::orderBy('updated_at','DESC')
          ->limit(2)
          //->whereDate('created_at', Carbon::today()->subDays(30))
         ->where('status','publish')
         ->get();
        $datacoarse = coarses::orderBy('updated_at','DESC')
          ->limit(2)
          //->whereDate('created_at', Carbon::today()->subDays(30))
         ->where('status','publish')
         ->get();
         // currency 
         //$data=Http::get('http://api.exchangeratesapi.io/v1/latest?access_key=a844972a41a4e4f4b3648a4147961a56&format=1')->json();
        $response = Http::acceptJson()
            ->get('http://api.exchangeratesapi.io/v1/latest?access_key=a844972a41a4e4f4b3648a4147961a56&format=1');
             //->get('https://freecurrencyapi.net/api/v2/latest');

        $response = self::getUdemyHttpClient()->get("https://www.udemy.com/api-2.0/courses/"); // For Details add ID example 473160;

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
        $response = self::getUdemyHttpClient()->get("https://www.udemy.com/api-2.0/courses/");
        //return $response->body();

        if($response->failed()){
            \Log::error($response);
            abort(503);
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
        $response = self::getUdemyHttpClient()->get("https://www.udemy.com/api-2.0/courses/{$id}/reviews/");
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
        $datacontect = content::orderBy('content_id','DESC')
         ->where('category_name','Servers Configuration')
         ->get();
        $datablog = content::orderBy('updated_at','DESC')
            ->limit(4)
              //->whereDate('created_at', Carbon::today()->subDays(30))p
            ->where('status','publish')
            ->where('category_name','Servers Configuration')
            ->get();

            return view('web.blogs.all')
        ->with('content', content::orderBy('updated_at', 'DESC')->where('status','publish')->where('category_name','Servers Configuration')->get())   
        ->with('datablog', $datablog)
        ->with('datacontect', $datacontect);
 
     //return view('web.blogs.all')
        // return view('web.blogs.all', [
        //     'posts' => content::latest()->filter(
        //                 request(['search', 'category', 'author'])
        //             )->paginate(18)->withQueryString()
        // ]);
    } 
    public function hosting() 
    {

        return view('web.web_hosting.hosting_service');
 
    }
    public function hostWithus() 
    {

        return view('web.web_hosting.hosting_withus');
 
    } 
    public function programming(Request $request, $slug)
    {
        $content =content::latest()
            ->where('slug', $slug)
            ->first();

        return view('web.programming.index')

        ->with('content', $content);
        //->with('content', content::latest()->where('slug', $slug)->first());
    } 
    public function allprogramming(Request $request) 
    {
        $datacontect = content::orderBy('content_id','DESC')
         ->where('category_name','programming')
         ->get();
        $datablog = content::orderBy('updated_at','DESC')
            ->limit(4)
              //->whereDate('created_at', Carbon::today()->subDays(30))
            ->where('status','publish')
            ->where('category_name','programming')
            ->get();

            return view('web.programming.all')
        ->with('content', content::orderBy('updated_at', 'DESC')->where('status','publish')->where('category_name','programming')->get())        
        ->with('datablog', $datablog)
        ->with('datacontect', $datacontect);
 
     //return view('web.blogs.all')
        // return view('web.blogs.all', [
        //     'posts' => content::latest()->filter(
        //                 request(['search', 'category', 'author'])
        //             )->paginate(18)->withQueryString()
        // ]);
    }
    public function allavirtual(Request $request) 
    {
        $datacontect = content::orderBy('content_id','DESC')
         ->where('category_name','Virtualization')
         ->get();
        $datablog = content::orderBy('updated_at','DESC')
            ->limit(4)
              //->whereDate('created_at', Carbon::today()->subDays(30))
            ->where('status','publish')
            ->where('category_name','Virtualization')
            ->get();

            return view('web.virtualization.all')
        ->with('content', content::orderBy('updated_at', 'DESC')->where('status','publish')->where('category_name','Virtualization')->get())        
        ->with('datablog', $datablog)
        ->with('datacontect', $datacontect);
    }  
    public function allalinuxadmin(Request $request) 
    {
        $datacontect = content::orderBy('content_id','DESC')
         ->where('category_name','Linux Administration')
         ->get();
        $datablog = content::orderBy('updated_at','DESC')
            ->limit(4)
              //->whereDate('created_at', Carbon::today()->subDays(30))
            ->where('status','publish')
            ->where('category_name','Linux Administration')
            ->get();

            return view('web.linuxadmin.all')
        ->with('content', content::orderBy('updated_at', 'DESC')->where('status','publish')->where('category_name','Linux Administration')->get())        
        ->with('datablog', $datablog)
        ->with('datacontect', $datacontect);
    } 
    public function allacybersecurity(Request $request) 
    {
        $datacontect = content::orderBy('content_id','DESC')
         ->where('category_name','Cyber Security')
         ->get();
         //dd($datacontect);
        // $datacontect = content::orderBy('content_id','DESC')
        //  //->join('categories', 'content.category_name', '=', 'categories.category_name')
        //  //->exists('category_name','Cyber Security')
        //  ->where('status','Available')
        //  ->where('category_name','Cyber Security')
        //  ->get();
        $datablog = content::orderBy('updated_at','DESC')
            //->join('categories', 'content.category_name', '=', 'categories.category_name')
            ->limit(4)
            //->exists('category_name','Cyber Security')
              //->whereDate('created_at', Carbon::today()->subDays(30))
            ->where('status','publish')
            ->where('category_name','Cyber Security')
            ->get();

            return view('web.cybersecurity.all')
        ->with('content', content::orderBy('updated_at', 'DESC')->where('status','publish')->where('category_name','Cyber Security')->get())        
        ->with('datablog', $datablog)
        ->with('datacontect', $datacontect);
    } 
}
