<?php

namespace App\Http\Controllers;

use App\Models\EventDetail;
use App\Models\ProgressDetail;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showRegister(){
        return view('register');
    }

    function showLogin(){
        return view('login');
    }

    function showHome(){
        $events = EventDetail::latest()->take(2)->get();
        $user = auth()->user();
        $submissions = ProgressDetail::where('nim', $user->nim)->get();
        return view('welcome', compact('events', 'user', 'submissions'));
    }

    function showDashboard(){
        $user = auth()->user();
        return view('welcome', compact('user'));
    }

    function showCBdetails(){
        return view('cb-details');
    }

    public function showComserv()
    {
        $userNim = auth()->user()->nim;
        $reviewedSubmissions = ProgressDetail::where('nim', $userNim)
            ->where('status', 'reviewed')
            ->get();

        return view('comserv', compact('reviewedSubmissions'));
    }

    public function showAdmDashboard()
    {
        $ongoingEvents = EventDetail::orderBy('created_at', 'desc')->take(4)->get();
        $submissions = ProgressDetail::orderBy('created_at', 'desc')->take(4)->get();

        return view('admin.dashboard', compact('ongoingEvents', 'submissions'));
    }

}
