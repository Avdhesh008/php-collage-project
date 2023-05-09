<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Client;
use Hash;


class AdminController extends Controller
{
    
    public function index()
    {
        $data = Client::all();

        return view('admin.pages.index',['data'=>$data]);
    }

    public function client()
    {  
        $assign = Admin::where('role','2')->get();

        return view('admin.pages.add_client',['assign'=>$assign]);
    }

    public function edit_client($id)
    {   
        $edit = Client::find($id);    
        $assign = Admin::where('role','2')->get();

        return view('admin.pages.edit_client',['edit'=>$edit,'assign'=>$assign]);
    }

    Public function add_client(Request $res)
    {
        $validated = $res->validate([           
            'assign_to_salesTl' => 'required',
            'client_name' => 'required',
            'client_email' => 'required',
            'client_mobile' => 'required',
            'client_address' => 'required',
            'description' => 'required',                   
        ]);
        if ($res->id) {
            $client = Client::find($res->id);
        } else {
            $client = new Client;
            $client->email_empID = auth()->user()->id;
        }        
        $client->assign_to_salesTl = $res->assign_to_salesTl;
        $client->feedback = 0;
        $client->client_name = $res->client_name;
        $client->client_email = $res->client_email;
        $client->client_mobile = $res->client_mobile;
        $client->client_address = $res->client_address;
        $client->description = $res->description;      
        $client->save();

        if ($client) {
            return redirect('admin/client')->withSuccess("Added Successfully...");
        } else {
            return back()->withError("Something went wrong!");
        }
    }

    public function destroy($id)
    {
        $res = Client::findOrfail(decrypt($id));
        if ($res->delete()) {        
            return back()->withSuccess("Deleted Successfully...");
        } else {
            return back()->withError("Something went wrong!");
        }
    }  
    
}

