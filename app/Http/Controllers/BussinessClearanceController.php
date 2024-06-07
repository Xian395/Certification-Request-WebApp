<?php

namespace App\Http\Controllers;


use App\Models\BussinessClearance;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BussinessClearanceController extends Controller
{
    public function create()
    {
        return Inertia::render('Bclearance/Create');
    }

    public function store(Request $request)
    {


        $image =  $request->file('validID')->store('business', 'public');


        BussinessClearance::create([
            'businessName' =>  $request->input('businessName'),
            'natureOfBusiness' =>  $request->input('natureOfBusiness'),
            'businessAddress' =>  $request->input('businessAddress'),
            'ownerName' =>  $request->input('ownerName'),
            'ownerContact' =>  $request->input('ownerContact'),
            'validID' => $image,
            'rtype' => 'Business Clearance'
        ]);
        return Redirect::route('dashboard');

    }

}
