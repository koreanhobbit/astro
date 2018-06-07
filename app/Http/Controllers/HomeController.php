<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogpost;
use App\Contact;
use App\Portfolio;
use App\Mail\EmailContact;
use Illuminate\Support\Facades\Mail;
use App\Setting;
use App\Websitesocmed;
use App\User;
use App\Product;

class HomeController extends Controller
{
    public function index(Request $request) {

        $setting = Setting::with('websitesocialmedias')->first();
        $members = User::where('user_status', '=', 1)->get();
    	// $posts = blogpost::orderBy('updated_at', 'desc')->simplePaginate(3, ['*'], 'blog');
        $portfolios = Portfolio::orderBy('created_at', 'desc')->with('category')->get();
        $categories = Portfolio::with('category')->select('portfolio_category_id')->distinct()->get();
        // $products = Product::where('is_published', '=', 1)->orderBy('id', 'asc')->simplePaginate(3,['*'], 'product');

    	// if($request->ajax()) {
     //        if($request->title == "blog") {
    	// 	  return view('partials._blog', ['posts' => $posts])->render();
     //        }
    	// }

    	//show the published post
    	return view('index', compact('categories', 'portfolios', 'setting', 'members'));
    }

    //function for contact 
    public function contact(Request $request) {
        if($request->ajax()) {
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string',
                'captcha' => 'required|captcha',

            ]);

        	$cm = new Contact;
        	$cm->name = $request->name;
        	$cm->email = $request->email;
        	$cm->message = $request->message;
        	$cm->save();
            Mail::to($cm)->queue(new EmailContact($cm));

            return $cm;
        }
    }
}
