<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Client;



class TlResearchController extends Controller
{
    public function index()
    {
        $data = Client::where('feedback', '1')->orderBy('assign_to_research', 'ASC')->get();

        $assign = Admin::where('role','5')->where('status','0')->get();

        return view('tlresearch.pages.index', ['data' => $data,'assign'=>$assign]);
    }

    public function assign($id)
    {
        $assign = Admin::where('role','5')->where('status','0')->get();
        $edit = Client::find($id);

        return view('tlresearch.pages.assign', ['assign'=>$assign,'edit'=>$edit]);
    }

    public function assign_check(Request $req)
    {
        $validated = $req->validate([           
            'assign_to_research' => 'required',                     
        ]);
        $value = explode(',', $req->id);
        foreach ($value as $val) {
            $check = Client::find($val);
            $check->research_TL_ID = auth()->user()->id;
            $check->assign_to_research = $req->assign_to_research;

            $check->save();
        }

        if ($check) {
            return redirect('tlresearch/client')->withSuccess("Assigned Successfully...");
        } else {
            return back()->withError("Something went wrong!");
        }
    }
}
