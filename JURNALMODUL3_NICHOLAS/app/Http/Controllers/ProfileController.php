<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{

    public function index()
    {
        $mahasiswa = User ::first();
        return view('Profile',compact('mahasiswa'));
        
    }

}
