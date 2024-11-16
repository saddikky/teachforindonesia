<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showRegister(){
        return view('register');
    }

    function showLogin(){
        return view('login');
    }

    function showDashboard(){
        return view('welcome');
    }

    function showsocialEvent(){
        return view('social-event');
    }

    function showCBCourse(){
        return view('cb-course');
    }

    function showinnovationProject(){
        return view('social-innovation-project');
    }

    function showSEdetails(){
        return view('se-details');
    }

    function showSEregister(){
        return view('se-register');
    }

    function showCBdetails(){
        return view('cb-details');
    }
    
    function showCBdetails2(){
        return view('cb-details-2');
    }

    function showSIdetails(){
        return view('si-details');
    }

    function showComserv(){
        return view('comserv');
    }

    function showAdmDashboard(){
        return view('admin.dashboard');
    }

}
