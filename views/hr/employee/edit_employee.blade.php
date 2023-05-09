@extends('hr.layouts.adminMaster')
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

                    <h1>Edit Employee</h1>


                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="{{url('hr/employees')}}" class="btn btn-info">Back</a></li>

                    </ol>

                </div>

            </div>

        </div><!-- /.container-fluid -->

    </section>
    <section id="mnbvcxx">
        <div class="userccount">
            <div class="formpanel">
                <!-- Personal Information -->

                <form action="{{url('hr/edit_employee')}}" method="POST" id="">
                    @csrf
                    <input type="hidden" name="id" value="{{$editt->id}}">
                    <div class="row my_uired_kl">
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Type</label>
                                <select class="form-control" name="role" required>
                                    @foreach($role as $roles)
                                    <option value="{{$roles->id}}" {{$editt->role==$roles->id?'selected':''}}>{{$roles->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Name</label>
                                <input type="text" name="name" value="{{isset($editt->name) && $editt->name!=''?$editt->name:''}}" class="form-control" placeholder="Employee Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Email</label>
                                <input type="email" name="email" value="{{isset($editt->email) && $editt->email!=''?$editt->email:''}}" class="form-control" placeholder="Employee Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Mobile</label>
                                <input type="text" name="mobile" value="{{isset($editt->mobile) && $editt->mobile!=''?$editt->mobile:''}}" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Votar ID</label>
                                <input type="text" name="votar_id" value="{{isset($editt->votar_id) && $editt->votar_id!=''?$editt->votar_id:''}}" class="form-control" placeholder="Employee Votar ID">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Aadhar No.</label>
                                <input type="text" name="aadhar" value="{{isset($editt->aadhar) && $editt->aadhar!=''?$editt->aadhar:''}}" class="form-control" placeholder="Employee Aadhar No." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Pan No.</label>
                                <input type="text" name="pan" value="{{isset($editt->pan) && $editt->pan!=''?$editt->pan:''}}" class="form-control" placeholder="Employee Pan No." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Joining Date</label>
                                <input type="date" name="joining_date" value="{{isset($editt->joining_date) && $editt->joining_date!=''?$editt->joining_date:''}}" class="form-control" placeholder="Employee Joining Date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Exit Date</label>
                                <input type="date" name="exit_date" value="{{isset($editt->exit_date) && $editt->exit_date!=''?$editt->exit_date:''}}" class="form-control" placeholder="Employee Exit Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Bank Name</label>
                                <input type="text" name="bank_name" value="{{isset($editt->bank_name) && $editt->bank_name!=''?$editt->bank_name:''}}" class="form-control" placeholder="Employee Bank Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Bank Account No</label>
                                <input type="text" name="account_no" value="{{isset($editt->account_no) && $editt->account_no!=''?$editt->account_no:''}}" class="form-control" placeholder="Employee Bank Account No" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Bank IFSC</label>
                                <input type="text" name="ifsc" value="{{isset($editt->ifsc) && $editt->ifsc!=''?$editt->ifsc:''}}" class="form-control" placeholder="Employee Bank IFSC" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow">
                                <label>Employee Bank MICR</label>
                                <input type="text" name="micr_code" value="{{isset($editt->micr_code) && $editt->micr_code!=''?$editt->micr_code:''}}" class="form-control" placeholder="Employee Bank MICR" required>
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
                                <textarea name="address" class="form-control" placeholder="Employee Addres" required>{{isset($editt->address) && $editt->address!=''?$editt->address:''}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="formrow">
                                <label>Employee Picture</label>
                                <input type="file" name="image" value="" class="form-control" placeholder="Employee Bank MICR" required>
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