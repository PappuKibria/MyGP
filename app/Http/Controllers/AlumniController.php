<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = User::where('is_active', 1)->where('reg_type', 3)->get();
        $committees = User::where('is_active', 1)->where('reg_type', 2)->get();
        $members = User::where('is_active', 1)->where('reg_type', 1)->get();
        return view('frontEnd.home.alumniList', ['alumnis'=>$alumnis, 'committees'=>$committees, 'members'=>$members]);
    }
}
