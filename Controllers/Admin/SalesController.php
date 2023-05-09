<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Pdf_feedback;

class SalesController extends Controller
{

    public function index()
    {
        $user = Admin::find(auth()->user()->id);
        $client = Client::where('Assign_to', $user->name)->where('feedback', '0')->get();

        return view('sales.sales.index', ['client' => $client]);
    }

    public function client_edit($id)
    {
        $edit = Client::find($id);

        return view('sales.sales.edit_client', ['edit' => $edit]);
    }

    public function update(Request $req)
    {
        $validated = $req->validate([
            'client_requirements' => 'required',
            'raise_to_research' => 'required',
            'sales_comments' => 'required',
            'client_status' => 'required',
        ]);

        $update = Client::find($req->id);
        $update->sales_id = auth()->user()->id;
        $update->client_requirements = $req->client_requirements;
        $update->raise_to_research = $req->raise_to_research;
        $update->sales_comments = $req->sales_comments;
        $update->client_status = $req->client_status;

        if ($req->client_status == 'Active') {
            $update->followup_date = $req->followup_date;
        }
        if ($req->client_status == 'Pipline') {
            $update->followup_date = $req->followup_date1;
            $update->pipline_reason = $req->pipline_reason;
        } else {
            $update->pipline_reason = '';
        }
        if ($req->client_status == 'Warm') {
            $update->followup_date = $req->followup_date2;
        }

        if ($req->client_status == 'Closed') {

            $update->ticket_size = $req->ticket_size;
            $update->mode_of_payment = $req->mode_of_payment;
            $update->dispatch = $req->dispatch;
            if ($req->dispatch == 'Dispatch Date') {
                $update->dispatch_date = $req->dispatch_date;
            } else {
                $update->dispatch_date = '';
            }
            $update->followup_date = '';
        } else {
            $update->ticket_size = 0;
            $update->mode_of_payment = '';
            $update->dispatch = '';
            $update->dispatch_date = '';           
        }
        if ($req->client_status == 'Lost') {
            $update->lost_reason = $req->lost_reason;
            $update->followup_date = '';
        } else {
            $update->lost_reason = '';
        }
        $update->save();

        if ($update) {
            return redirect('sales/client')->withSuccess("updated Successfully...");
        } else {
            return back()->withError("Something went wrong!");
        }
    }


    public function get_data($id)
    {
        $assign = Admin::where('role', '3')->get();
        $edit = Client::find($id);

        return view('sales.sales.assign', ['assign' => $assign, 'edit' => $edit]);
    }

    public function assignto(Request $req)
    {
        $validated = $req->validate([
            'assign_to_researchTL' => 'required',
        ]);

        $assignn = Client::find($req->id);
        $assignn->assign_to_researchTL = $req->assign_to_researchTL;
        $assignn->feedback = 1;

        $assignn->save();

        if ($assignn) {
            return redirect('sales/client')->withSuccess("updated Successfully...");
        } else {
            return back()->withError("Something went wrong!");
        }
    }

    public function feedback()
    {
        $feedback = Pdf_feedback::where('salesmen_id', auth()->user()->id)->where('feedback_status', '1')->get();

        $client_arr = array();
        foreach ($feedback as $val) {
            $val->client = Client::find($val->client_id);
            array_push($client_arr, $val);
        }


        return view('sales.sales.client_feedback', ['feedback' => $client_arr]);
    }

    public function return_feed($id)
    {
        $client  = Client::find($id);

        return view('sales.sales.return_feedback', ['client' => $client]);
    }

    public function return_feedback(Request $req)
    {
        $validated = $req->validate([
            'Description' => 'required'
        ]);

        $client = Pdf_feedback::find($req->id);

        $return = new Pdf_feedback;
        $return->salesmen_id = auth()->user()->id;
        $return->researcher_id = $client->researcher_id;
        $return->client_id = $req->id;
        $return->feedback_status = 0;
        $return->Description = $req->Description;

        $return->save();

        if ($return) {
            return redirect('sales/client-feedback')->with('Return Feedback Submitted');
        } else {
            return back()->with('Something Went Wrong');
        }
    }
}
