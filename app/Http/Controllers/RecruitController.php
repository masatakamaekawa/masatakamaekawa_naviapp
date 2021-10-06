<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit;

class RecruitController extends Controller
{
    public function index(Request $request)
    {
        $recruitoment = $request->recruitoment;
        $workplace = $request->workplace;
        $salary = $request->salary;

        $params = $request->query();
        $recruits = Recruit::search($params)->paginate(10);
        
        $recruits->appends(compact('recruitoment', 'workplace','salary'));
        return view('recruits.index', compact('recruits'));
    }

    public function show($id)
    {
        $recruit = Recruit::find($id);
        $zoom = 15;
        return view('recruits.show', compact('recruit','zoom'));
    }
}
