<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AuthorizationController extends Controller
{
    //

    public function index(){
        // controller gates for admin
        if(!Gate::allows('isAdmin')){
            abort(403);
        }

        return 'admin gate works';
    }
}
