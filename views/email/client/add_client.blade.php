@extends('email.layouts.adminMaster')
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
</style>



<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Add Client</h1>


        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="{{url('email/client')}}" class="btn btn-info">Show Client</a></li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>
  <section id="mnbvcxx">
    <div class="userccount">
      <div class="formpanel">
        <!-- Personal Information -->

        <form action="{{url('email/add_client')}}" method="POST" id="">
          @csrf
          <div class="row my_uired_kl">
            <div class="col-md-6">
              <div class="formrow">
                <label>Assign To</label>
                <select class="form-control" name="assign_to_salesTl" required>
                  <option value="">-Assign To Sales(TL)-</option>
                  @foreach($assign as $assign)
                  <option value="{{$assign->name}}">{{$assign->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Name</label>
                <input type="text" name="client_name" value="" class="form-control" placeholder="Client Name" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="formrow">
                <label>Client Email</label>
                <input type="email" name="client_email" value="" class="form-control" placeholder="Client Email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Mobile Number (Optional)</label>
                <input type="text" name="client_mobile" value="" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Report Title</label>
                <input type="text" name="report_title" value="" class="form-control" placeholder="Report Title" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Company</label>
                <input type="text" name="client_company" value="" class="form-control" placeholder="Client Company" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Region</label>
                <select class="form-control" name="client_region" required>
                  <option value="">-Client Region-</option>
                  <option value="Asia">Asia</option>
                  <option value="Europe">Europe</option>
                  <option value="US">US</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Country (Optional)</label>
                <input type="text" name="client_country" value="" class="form-control" placeholder="Client Country">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Linkedin ID</label>
                <input type="text" name="client_linkedin" value="" class="form-control" placeholder="Client Linkedin ID" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="formrow">
                <label>Description</label>
                <textarea name="description" class="form-control" placeholder="Description" required></textarea>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Add Client">
      </div>
      </form>
    </div>
</div>
</section>

@endsection('contents')