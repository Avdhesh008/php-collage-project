@extends('sales.layouts.adminMaster')
@section('contents')

<style>
  section#mnbvcxx {
    padding: 0px 30px;
  }

  .malum a.ramu {
    /* margin-right: 26px; */
    background: #007BFF;
    color: white;
    padding: 8px 10px;
    margin: 0px;
    /* padding: 0px; */
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    width: 100px;
  }

  .malum {
    display: flex;
    justify-content: flex-start;
  }

  .malum input.btn.btn-primary {
    margin-left: 10px;
  }

  .deleteqlalifications {
    position: absolute;
    top: 10px;
    left: -11px;
    /* z-index: 999999 !important; */
  }



  section#mnbvcxx {
    position: relative;
    padding: 0px 30px;
    padding-left: 50px;
  }

  .my_uired_kl {
    position: relative !important;
  }

  .my_uired_kl .col-md-6 {
    margin-bottom: 15px;
  }

  .my_uired_kl .col-md-12 {
    margin-bottom: 15px;
  }

  .formrow {
    width: 100%;
}

.formrow input {
    width: 100%;
}


a.btn.btn-warning {
    margin-top: 32px !important;
}

input.btn.btn-primary {
    margin: 30px 0px;
}

</style>



<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Edit Client</h1>


        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="{{url('sales/client')}}" class="btn btn-warning">Back</a></li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>
  <section id="mnbvcxx">
    <div class="userccount">
      <div class="formpanel">
        <!-- Personal Information -->

        <form action="{{url('sales/edit-client')}}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{isset($edit->id) && $edit->id!=''?$edit->id:''}}">
          <div class="row my_uired_kl">
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Name</label>
                <input type="text" name="client_name" value="{{isset($edit->client_name) && $edit->client_name!=''?$edit->client_name:''}}" class="form-control" placeholder="Client Name" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Email</label>
                <input type="email" name="client_email" value="{{isset($edit->client_email) && $edit->client_email!=''?$edit->client_email:''}}" class="form-control" placeholder="Client Email" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Mobile</label>
                <input type="text" name="client_mobile" value="{{isset($edit->client_mobile) && $edit->client_mobile!=''?$edit->client_mobile:''}}" class="form-control" placeholder="Phone" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Report Title</label>
                <input type="text" name="report_title" value="{{isset($edit->report_title) && $edit->report_title!=''?$edit->report_title:''}}" class="form-control" placeholder="Report Title" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Company</label>
                <input type="text" name="client_company" value="{{isset($edit->client_company) && $edit->client_company!=''?$edit->client_company:''}}" class="form-control" placeholder="Client Company" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Region</label>
                <select class="form-control" name="client_region" disabled>
                  <option value="">-Client Region-</option>
                  <option value="Asia" {{$edit->client_region=='Asia'?'selected':''}}>Asia</option>
                  <option value="Europe" {{$edit->client_region=='Europe'?'selected':''}}>Europe</option>
                  <option value="US" {{$edit->client_region=='US'?'selected':''}}>US</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Country (Optional)</label>
                <input type="text" name="client_country" value="{{isset($edit->client_country) && $edit->client_country!=''?$edit->client_country:''}}" class="form-control" placeholder="Client Country" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Linkedin ID</label>
                <input type="text" name="client_linkedin" value="{{isset($edit->client_linkedin) && $edit->client_linkedin!=''?$edit->client_linkedin:''}}" class="form-control" placeholder="Client Linkedin ID" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="formrow">
                <label>Description</label>
                <textarea name="description" class="form-control" placeholder="Description" disabled>{{isset($edit->description) && $edit->description!=''?$edit->description:''}}</textarea>
              </div>
            </div>
          </div>

          <hr>
          <div class="row my_uired_kl">
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Requirements</label>
                <input type="text" name="client_requirements" value="{{isset($edit->client_requirements) && $edit->client_requirements!=''?$edit->client_requirements:''}}" class="form-control" placeholder="Client Requirements">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Raise To Research</label>
                <input type="text" name="raise_to_research" value="{{isset($edit->raise_to_research) && $edit->raise_to_research!=''?$edit->raise_to_research:''}}" class="form-control" placeholder="Raise To Research">
              </div>
            </div>
            <div class="col-md-12">
              <div class="formrow">
                <label>Sales Comments</label>
                <textarea name="sales_comments" class="form-control" placeholder="Sales Comments">{{isset($edit->sales_comments) && $edit->sales_comments!=''?$edit->sales_comments:''}}</textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Status</label>
                <select class="form-control" name="client_status" onchange="showDiv()" id="clientStatus">
                  <option value="">-Client Status-</option>
                  <option value="Active" {{$edit->client_status=='Active'?'selected':''}}>Active</option>
                  <option value="Pipline" {{$edit->client_status=='Pipline'?'selected':''}}>Pipline</option>
                  <option value="Warm" {{$edit->client_status=='Warm'?'selected':''}}>Warm</option>
                  <option value="Closed" {{$edit->client_status=='Closed'?'selected':''}}>Closed</option>
                  <option value="Lost" {{$edit->client_status=='Lost'?'selected':''}}>Lost</option>
                </select>
              </div>
            </div>

            <div class="col-md-6" id="activeAv" style="display: none;">
              <div class="formrow">
                <label>Followup Date</label>
                <input type="date" name="followup_date" value="{{isset($edit->followup_date) && $edit->followup_date!=''?$edit->followup_date:''}}" class="form-control" placeholder="Followup Date">
              </div>
            </div>

            <div class="col-md-6" id="warmAv" style="display: none;">
              <div class="formrow">
                <label>Followup Date</label>
                <input type="date" name="followup_date2" value="{{isset($edit->followup_date) && $edit->followup_date!=''?$edit->followup_date:''}}" class="form-control" placeholder="Followup Date">
              </div>
            </div>

            <div class="col-md-6" id="lostAv" style="display: none;">
              <div class="formrow">
                <label>Select Reason</label>
                <select class="form-control" name="lost_reason">
                  <option value="">-Reason-</option>
                  <option value="Client Has No Budget" {{$edit->lost_reason=='Client Has No Budget'?'selected':''}}>Client Has No Budget</option>
                  <option value="Sample Is Not Appropriate" {{$edit->lost_reason=='Sample Is Not Appropriate'?'selected':''}}>Sample Is Not Appropriate</option>
                  <option value="Not A Prospect Buyer" {{$edit->lost_reason=='Not A Prospect Buyer'?'selected':''}}>Not A Prospect Buyer</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row" id="piplineAv" style="display: none;">
            <div class="col-md-6">
              <div class="formrow">
                <label>Select Reason</label>
                <select class="form-control" name="pipline_reason">
                  <option value="">-Select Reason-</option>
                  <option value="Client In Conversation" {{$edit->pipline_reason=='Client In Conversation'?'selected':''}}>Client In Conversation</option>
                  <option value="Client Query Rise To Research TL" {{$edit->pipline_reason=='Client Query Rise To Research TL'?'selected':''}}>Client Query Rise To Research TL</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Followup Date</label>
                <input type="date" name="followup_date1" value="{{isset($edit->followup_date) && $edit->followup_date!=''?$edit->followup_date:''}}" class="form-control" placeholder="Followup Date">
              </div>
            </div>
          </div>

          <div class="row" id="closedAv" style="display: none;">
            <div class="col-md-6">
              <div class="formrow">
                <label>Ticket Size</label>
                <input type="number" name="ticket_size" value="{{isset($edit->ticket_size) && $edit->ticket_size!=''?$edit->ticket_size:''}}" class="form-control" placeholder="Ticket Size">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Mode Of Payment</label>
                <select class="form-control" name="mode_of_payment">
                  <option value="">-Mode Of Payment-</option>
                  <option value="Bankwire" {{$edit->mode_of_payment=='Bankwire'?'selected':''}}>Bankwire</option>
                  <option value="Payment Getway" {{$edit->mode_of_payment=='Payment Getway'?'selected':''}}>Payment Getway</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Dispatch</label>
                <select class="form-control" name="dispatch" onchange="showdate()" id="dateshow">
                  <option value="">-Dispatch-</option>
                  <option value="Dispatch Date" {{$edit->dispatch=='Dispatch Date'?'selected':''}}>Dispatch Date</option>
                  <option value="Dispatch Request" {{$edit->dispatch=='Dispatch Request'?'selected':''}}>Dispatch Request</option>
                </select>
              </div>
            </div>
            <div class="col-md-6" id="dateAv" style="display: none;">
              <div class="formrow">
                <label>Dispatch Date</label>
                <input type="date" name="dispatch_date" value="{{isset($edit->dispatch_date) && $edit->dispatch_date!=''?$edit->dispatch_date:''}}" class="form-control" placeholder="Dispatch Date">
              </div>
            </div>
            <div class="col-md-6">
            <div class="formrow">
            <label></label>
              <a href="#" class="btn btn-warning">Create Invoice</a>
            </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Save">
      </div>
      </form>
    </div>
</div>
</section>

@endsection('contents')

<script>
  function showDiv() {

    document.getElementById("activeAv").style.display = "none";
    document.getElementById("piplineAv").style.display = "none";
    document.getElementById("warmAv").style.display = "none";
    document.getElementById("closedAv").style.display = "none";
    document.getElementById("lostAv").style.display = "none";


    var selectedOption = document.getElementById("clientStatus").value;
    document.getElementById(selectedOption.toLowerCase() + "Av").style.display = "flex";
  }


  window.addEventListener("load", function(event) {
    showDiv();
  });
</script>
<script>
  function showdate() {
    var selectedValue = document.getElementById("dateshow").value;
    if (selectedValue === "Dispatch Date") {
      document.getElementById("dateAv").style.display = "block";
    } else {
      document.getElementById("dateAv").style.display = "none";
    }
  }
  window.addEventListener("load", function(event) {
    showdate();
  });
</script>