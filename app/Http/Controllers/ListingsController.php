<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingsController extends Controller
{
    // show all listings
    public function index(){
        return view('listings.index', [
            'listings' => Listings::latest()->filter(request(['tag', 'search']))->paginate(2)
        ]);
    }

    //show single listing
    public function show(Listings $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

//    create new listing
    public function create(){
        return view('listings.create');
    }

//    store listing data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Listings::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully');

    }
}
