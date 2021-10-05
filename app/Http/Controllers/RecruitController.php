<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit;

class RecruitController extends Controller
{
    public function index()
    {
        $recruits = Recruit::simplepaginate(10);
        return view('recruits.index', compact('recruits'));
    }

    public function show($id)
    {
        $recruit = Recruit::find($id);
        $zoom = 15;
        return view('recruits.show', compact('recruit','zoom'));
    }
}
