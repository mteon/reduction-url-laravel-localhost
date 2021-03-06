<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

class LinksController extends Controller
{
    public function show($id) {
        $link = Link::findOrFail($id);
        
        return redirect($link->url, 301);
    }
    
    public function create(){
        return view('links.create');
    }
    
    public function store() {
        
        $url = Input::get('url');
        $link = Link::where('url', $url)->first();
        if(!$link){
            $link = Link::create(['url' => Input::get('url')]);
        }
        
        
        return view('links.success', compact('link'));
    }
}
