<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class supportcontroller extends RoutingController
{
    public function site()
    {
        
        return view('contact');

        

    
    }
}
