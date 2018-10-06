<?php

namespace App\Http\Controllers;

use App\Images;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SearchController extends Controller
{

    public function search(Request $request) {

        $query = $request->input('query');
        if (isset($query))
        {
            $results = Images::where('name', 'LIKE', "%$query%")->orWhere( 'category', 'LIKE', '%'. $query .'%')->orWhere( 'type', 'LIKE', '%'. $query .'%')->get();
            $request->session()->flash('query', $query);
            return view('search', compact('results'));
        }
        else{
            return abort(404);
        }
    }
}
