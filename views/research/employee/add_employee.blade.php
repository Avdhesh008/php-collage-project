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

          <h1>Add Employee</h1>


        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="{{url('admin/employee')}}" class="btn btn-info">Show Employee</a></li>



          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>
  <section id="mnbvcxx">
    <div class="userccount">
      <div class="formpanel">
        <!-- Personal Information -->
        
        <form action="{{url('admin/add_employee')}}" method="POST" id="">
          @csrf
         
          <div class="row my_uired_kl">
          <div class="col-md-6">
              <div class="formrow">
              <label>Employee Type</label>
                <select class="form-control" name="role">
                  @foreach($role as $roles)
                  <option value="{{$roles->id}}">{{$roles->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
                <label>Employee Name</label>
                <input type="text" name="name" value="" class="form-control" placeholder="Employee Name">
              </div>
            </div>

            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Email</label>
                <input type="email" name="email" value="" class="form-control" placeholder="Employee Email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Mobile</label>
                <input type="text" name="mobile" value="" class="form-control" placeholder="Phone">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Votar ID</label>
                <input type="text" name="votar_id" value="" class="form-control" placeholder="Employee Votar ID">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Aadhar No.</label>
                <input type="text" name="aadhar" value="" class="form-control" placeholder="Employee Aadhar No.">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Pan No.</label>
                <input type="text" name="pan" value="" class="form-control" placeholder="Employee Pan No.">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Joining Date</label>
                <input type="date" name="joining_date" value="" class="form-control" placeholder="Employee Joining Date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Exit Date</label>
                <input type="date" name="exit_date" value="" class="form-control" placeholder="Employee Exit Date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Bank Name</label>
                <input type="text" name="bank_name" value="" class="form-control" placeholder="Employee Bank Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Bank Account No</label>
                <input type="text" name="account_no" value="" class="form-control" placeholder="Employee Bank Account No">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Bank IFSC</label>
                <input type="text" name="ifsc" value="" class="form-control" placeholder="Employee Bank IFSC">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Bank MICR</label>
                <input type="text" name="micr_code" value="" class="form-control" placeholder="Employee Bank MICR">
              </div>
            </div>
            <div class="col-md-6">
              <div class="formrow">
              <label>Employee Password</label>
                <input type="text" name="password" value="" class="form-control" placeholder="Employee Password">
              </div>
            </div>
            <div class="col-md-12">
              <div class="formrow">
              <label>Employee Address</label>
              <textarea  name="address" class="form-control" placeholder="Employee Addres"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="formrow">
              <label>Employee Picture</label>
                <input type="file" name="image" value="" class="form-control" placeholder="Employee Bank MICR">
              </div>
            </div>
           
          </div>
     
          <input type="submit" class="btn btn-primary" value="Update">
      </div>
      </form>
    </div>
</div>
</section>

<script>
 
</script>
<script>
 
</script>
@endsection('contents')