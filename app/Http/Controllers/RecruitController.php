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

    public function create()
    {
        return view('recruits.create');
    }

    public function store(Request $request)
    {
        // インスタンスの作成
        $recruit = new Recruit;
        // 値の用意
        $recruit->name = $request->name;
        $recruit->address = $request->address;
        $recruit->phone = $request->phone;
        $recruit->recruitoment = $request->recruitoment;
        $recruit->workplace = $request->workplace;
        $recruit->salary = $request->salary;
        $recruit->note = $request->note;
        $recruit->image_url = $request->image_url;
        // インスタンスに値を設定して保存
        $recruit->save();
        // 登録したらindexに戻る
        return redirect('/recruits');
    }

    public function show($id)
    {
        $recruit = Recruit::find($id);
        $zoom = 15;
        return view('recruits.show', compact('recruit','zoom'));
    }

    public function edit($id) 
    {
        $recruit = Recruit::find($id);
        return view('recruits.edit', ['recruit' => $recruit]);
    }
    public function update(Request $request, $id) 
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $recruit = Recruit::find($id);
        // 値の用意
        $recruit->name = $request->name;
        $recruit->address = $request->address;
        $recruit->phone = $request->phone;
        $recruit->recruitoment = $request->recruitoment;
        $recruit->workplace = $request->workplace;
        $recruit->salary = $request->salary;
        $recruit->note = $request->note;
        $recruit->image_url = $request->image_url;
        // 保存
        $recruit->save();
        // 登録したらindexに戻る
        return redirect('/recruits');
    }
    public function destroy($id)
    {
        $recruit = Recruit::find($id);
        $recruit->delete();
        return redirect('/recruits');
    }
}
