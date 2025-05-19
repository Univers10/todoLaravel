<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalutController extends Controller
{
    public function index($nom)
    {
        $nom = $nom;
        if ($nom == 'Kadjo') {
            return view('salut', [
                'nom' => 'Kadjo est un grand'
            ]);
        }else{
            return view('salut', [
                'nom' => $nom
            ]);
        }
    }
}
