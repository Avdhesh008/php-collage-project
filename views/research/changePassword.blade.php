@extends('admin.layouts.adminMaster')
@section('contents')
<style>
  .login-box, .register-box {
    margin-top: 91px;
    width: 360px;
    margin-left: 40%;
  }
  footer.main-footer {
    position: fixed;
  left: 0;
  bottom: 0;
  width:100%;
}

.error p
{
  color:red;
}
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Password</b>Change</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Stay safe change your password</p>

      <form  method="POST" action="{{route('admin.changepassword')}}" >
        @csrf
        
        <div class="input-group mb-3">
          <input type="password" name="old_password" class="form-control" placeholder="Old Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="error"><p id="error_old_password"></p></div>

        <div class="input-group mb-3">
          <input type="password" name="new_password" class="form-control" placeholder="New Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div> 
        </div>
        <div class="error"><p id="error_new_password"></p></div>

        <div class="input-group mb-3">
          <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="error"><p id="error_confirm_password"></p></div>
        
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


</body>
@endsection('contents')

@push('change-password')

<script type="text/javascript">

$(document).ready(function(ddds){

$("#change-password").on('submit',(function(ddds){

ddds.preventDefault();

$.ajax({

url:"{{url('admin/password')}}",

type:"POST",

data:new FormData(this),

contentType:false,

cache:false,

processData:false,

success:function(data)
{ 
  
        $("#error_old_password").html("");
        $("#error_new_password").html("");
        $("#error_confirm_password").html("");
  if(data.validation_errors)
   {
      $("#error_old_password").html(data.validation_errors.old_password);
        $("#error_new_password").html(data.validation_errors.new_password);
        $("#error_confirm_password").html(data.validation_errors.confirm_password);
    }
    
    if(data.status===401)
    {
      $("#error_old_password").html(data.message);
    }
    if(data.status===400)
    {
      $("#error_new_password").html(data.message);
    }

    if(data.status===200)
    {
      toastr.success("Password Updated Successfully!","Success!");
      setInterval(() => {
        window.location.href=data.route; 
      }, 1000);
      
       
    }
    

    
},

error:function(){alert("error");}

});

}));

});

</script>

@endpush
