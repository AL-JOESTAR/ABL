<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardRedirectController extends Controller
{
    public function __invoke()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        
        if ($user->name === 'Admin' || $user->email === 'admin@test.com') {
            return view('dashboard'); 
        }

        
        $hasRental = $user->rentals()
            ->where('status', 'active')
            ->exists();

        if ($hasRental) {
            return view('dashboard');
        }

        return redirect()->route('home');
    }
}
