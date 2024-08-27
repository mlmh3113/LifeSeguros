<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Service;

class HomeController extends Controller
{
    
    public function index()
    {
        return Inertia::render('HomeView');
    }

    public function getServices()
    {
        $services = Service::all();
        return response()->json($services);   
    }

    public function getService()
    {
        return Inertia::render('GetService');  
    }

    public function about()
    {
        return Inertia::render('About');  
    }

}
