<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Client;
use Hash;


class EmailController extends Controller
{

    public function index()
    {
        $data = Client::Where('email_empID', auth()->user()->id)->get();

        return view('email.client.client', ['data' => $data]);
    }

    public function client()
    {
        $assign = Admin::where('role', '2')->get();

        return view('email.client.add_client', ['assign' => $assign]);
    }

    public function edit_client($id)
    {
        $edit = Client::find($id);
        $assign = Admin::where('role', '2')->get();

        return view('email.client.edit_client', ['edit' => $edit, 'assign' => $assign]);
    }

    public function add_client(Request $res)
    {
        $validated = $res->validate([
            'assign_to_salesTl' => 'required',
            'client_name' => 'required',
            'client_email' => 'required|email|unique:clients',
            'report_title' => 'required',
            'client_company' => 'required',
            'client_region' => 'required',
            'client_linkedin' => 'required',
            'description' => 'required',
        ]);

        $client = new Client;
        $client->email_empID = auth()->user()->id;
        $client->assign_to_salesTl = $res->assign_to_salesTl;
        $client->feedback = 0;
        $client->client_name = $res->client_name;
        $client->client_email = $res->client_email;

        if ($res->client_mobile != '') {
            $client->client_mobile = $res->client_mobile;
        }

        $client->report_title = $res->report_title;
        $client->client_company = $res->client_company;
        $client->client_region = $res->client_region;

        if ($res->client_country != '') {
            $client->client_country = $res->client_country;
        }

        $client->client_linkedin = $res->client_linkedin;
        $client->description = $res->description;
        $client->save();


        if ($client) {
            return redirect('email/client')->withSuccess("Added Successfully...");
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
