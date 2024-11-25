<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nim' => 'required|string|size:10|unique:users|regex:/^[0-9]{10}$/',
            'email' => 'required|string|email|max:255|unique:users|regex:/@binus\.ac\.id$/',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed', 
                'regex:/[A-Z]/',        
                'regex:/[a-z]/',    
                'regex:/[0-9]/',  
                'regex:/[\W_]/',
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user
        try {
            $user = User::create([
                'name' => $request->name,
                'nim' => $request->nim,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create account. Please try again.');
        }

        return redirect()->route('login')->with('success', 'Account created successfully!');
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nim' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the user by NIM
        $user = User::where('nim', $request->nim)->first();

        if (!$user) {
            return redirect()->route('login')->withErrors(['nim' => 'NIM not found.'])->withInput();
        }

        // Check if the password is correct
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            if (Auth::check() && $user->is_admin) {
                return redirect()->route('admDashboard');
            } else if (Auth::check()) {
                return redirect('/');
            } else {
                return redirect()->route('login')->withErrors(['login' => 'Login failed, please try again.']);
            }
        } else {
            return redirect()->route('login')->withErrors(['password' => 'Invalid credentials.'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Menghapus sesi
        $request->session()->regenerateToken(); // Regenerasi token CSRF
        return redirect()->route('login'); // Arahkan ke halaman landing
    }
}
