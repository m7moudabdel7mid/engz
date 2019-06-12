<?php

namespace App\Http\Controllers;

use App\Url;
use Validator;
use Illuminate\Http\Request;

class UrlController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('home');
    }


    public function store(Request $request)
    {
		$validator = Validator::make($request->all(), [
            'url' => 'required|active_url',
        ]);
		if($validator->fails()) return redirect()->back()->withErrors($validator);
		$url = new Url;
		$url->url = $request->url;
		$url->slug = Url::get_slug();
		$url->save();
		
		return redirect()->to('/'.$url->slug.'/stats');
    }
	
	public function view_stats(Url $url) {
		return view('stats')->with([
			'url' => $url->url,
			'slug' => $url->slug,
			'hits' => $url->hits
		]);
	}
	
	public function redirect(Url $url) {
		$url->hits++;
		$url->save();
		return redirect()->away($url->url);
	}
}
