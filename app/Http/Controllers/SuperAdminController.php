<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function SuperAdmin()
    {
        // Add your logic for super admin home page
        return view('SuperAdmin/superAdmin');
    }
}
