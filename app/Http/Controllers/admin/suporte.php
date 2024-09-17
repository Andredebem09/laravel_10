<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class suporte extends RoutingControllerer
{
    public function index()
    {
        return view('admin/supports/index');
    }
}
