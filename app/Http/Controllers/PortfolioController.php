<?php

namespace App\Http\Controllers;

// use App\Models\
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $stats = [
            
        ];
        
        return view('accueil', compact('stats'));
    }

    
}