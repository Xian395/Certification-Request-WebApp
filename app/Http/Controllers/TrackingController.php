<?php

namespace App\Http\Controllers;

use App\Models\Bcertificate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TrackingController extends Controller
{


   public function index(Bcertificate $bcertificates)
   {
       return Inertia::render('Track/Index'  , [
        'bcertificates' => Bcertificate::all()->map(function ($bcertificates) {
            return [
                'id' => $bcertificates->id,
                'name' => $bcertificates->name,
                'status' => $bcertificates->status,

               

            ];
        })
    ]);
   }
   

   public function show( Bcertificate $bcertificates) {

    return Inertia::render('Request/Index', [
        'bcertificates' => $bcertificates
    ]);
}

   
}
