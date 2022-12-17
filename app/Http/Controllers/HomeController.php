<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        if(auth()->check()){
            if(auth()->user()->role == 'admin'){
                return redirect('admin/dashboard');
            }
            else if(auth()->user()->role == 'user'){
                return redirect('/dashboard');
            }
            else if(auth()->user()->role == 'editor'){
                return redirect('/dashboard');
            }
        }
        else{
            return view('welcome');
        }
    }
}
