<?php

namespace App\Http\Controllers;

use App\Models\Bcertificate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BcertificateController extends Controller
{
    public function create()
    {
        return Inertia::render('Bcertificate/Create');
    }
    

    public function index(){
        return Inertia::render('Request/Index'    , [
            'bcertificates' => Bcertificate::all()->map(function ($bcertificates) {
                return [
                    'id' => $bcertificates->id,
                    'name' => $bcertificates->name,
                    'birthDate' => $bcertificates->birthDate,
                    'contactNumber' => $bcertificates->contactNumber,
                    'sex' => $bcertificates->sex,
                    'age' => $bcertificates->age,
                    'civilStatus' => $bcertificates->civilStatus,
                    'occupation' => $bcertificates->occupation,
                    'purpose' => $bcertificates->purpose,
                    'rtype' => $bcertificates->rtype,
                    'status' => $bcertificates->status,
                    'created_at' => $bcertificates->created_at->format('Y-m-d H:i:s'),
                   
    
                ];
            })
        ]);
    }




    public function destroy( Bcertificate $bcertificates){

        $bcertificates->delete();
        return redirect()->route('request.index');

    }



    public function show( Bcertificate $bcertificates) {

        return Inertia::render('Request/Show', [
            'bcertificates' => $bcertificates
        ]);
    }







    public function edit(Bcertificate $bcertificates)
    {
        return Inertia::render('Request/Edit', [
            'bcertificates' => $bcertificates
        ]);

    }

    public function requestupdate(Request $request, Bcertificate $bcertificates)
    {

        $bcertificates->update([

            'status' => $request->input('status'),

        ]);
        return Redirect::route('request.index');
    }







    
    public function store(Request $request)
    {
        Bcertificate::create([
            'name' => $request->input('name'),
            'birthDate' => $request->input('birthDate'),
            'age' => $request->input('age'),
            'contactNumber' => $request->input('contactNumber'),
            'sex' => $request->input('sex'),
            'civilStatus' => $request->input('civilStatus'),
            'purpose' => $request->input('purpose'),
            'rtype' => 'Barangay Certificate',
            'occupation' => $request->input('occupation'),
            'status' => 'pending',
            


        ]);

        return Redirect::route('dashboard')->with('message','Request has Succsefuly Submitted!!');
    }


  

}




