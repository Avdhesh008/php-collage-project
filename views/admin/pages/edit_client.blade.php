@extends('admin.layouts.adminMaster')
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

          <h1>Edit Client</h1>


        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="{{url('admin/client')}}" class="btn btn-info">Show Client</a></li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>
  <section id="mnbvcxx">
    <div class="userccount">
      <div class="formpanel">
        <!-- Personal Information -->

        <form action="{{url('admin/add_client')}}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$edit->id}}">
          <div class="row my_uired_kl">
          <div class="col-md-6">
              <div class="formrow">
                <label>Assign To</label>
                <select class="form-control" name="assign_to_salesTl" required>
                  <option value="">-Assign To Sales(TL)-</option>
                  @foreach($assign as $assign)
                  <option value="{{$assign->name}}" {{$edit->assign_to_salesTl==$assign->name?'selected':''}}>{{$assign->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Name</label>
                <input type="text" name="client_name" value="{{$edit->client_name}}" class="form-control" placeholder="Client Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Email</label>
                <input type="email" name="client_email" value="{{$edit->client_email}}" class="form-control" placeholder="Client Email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Mobile</label>
                <input type="text" name="client_mobile" value="{{$edit->client_mobile}}" class="form-control" placeholder="Phone" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Client Address</label>
                <textarea name="client_address" class="form-control" placeholder="Client Address" required>{{$edit->client_address}}</textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="formrow">
                <label>Description</label>
                <textarea name="description" class="form-control" placeholder="Description" required>{{$edit->description}}</textarea>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Update">
      </div>
      </form>
    </div>
</div>
</section>

@endsection('contents')