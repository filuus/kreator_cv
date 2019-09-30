<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\User;

class ProfileController extends Controller
{
    public function show($user)
    {
        if(auth()->user()->has_cv) {
            $user = User::findOrFail($user);
            return view('profile.show', [
                'user' => $user,
            ]);
        } else {
            return redirect()->back();
        }
        
    }

    public function getPdf($user)
    {
        set_time_limit(300);
        $user = User::findOrFail($user);

        $data = [
            'user' => $user,
        ];
        $pdf = PDF::loadView('profile.pdf', $data);
        return $pdf->stream();

    }
}
