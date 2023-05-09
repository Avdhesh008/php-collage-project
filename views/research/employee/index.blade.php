@extends('admin.layouts.adminMaster')
@section('contents') 
<style>
  a {
    color: #111111;
    text-decoration: none;
    background-color: transparent;
  }
  .row.tttttttttttt {
    padding: 5px 20px;
    display: flex;
    justify-content: space-between;
  }
  .row.tttttttttttt .ramsig {
    width: 50%;
  }
  td a button.btn.btn-warning {
    width: 200px;
  }

  a:hover {
    color: black;
  }
  .umesh_tab {
    overflow: auto !important;
    height: 70vh;
    margin-left: 30px;
    margin-right: 0px;
  }
  .formsearch {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .inpex {
    width: 15% !important;
  }
  .selectres {
    height: calc(1.5em + -0.25rem + 2px) !important;
  }
</style>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Employee</h1>

          <!-- <a href="{{url('admin/excersie/create')}}" class="btn btn-info mt-3">Excersice Add</a> -->
        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item">
              <a href="{{url('admin/add_employee')}}" class="btn btn-info">Add Employee</a>
            </li>
          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>

  <!-- Main content -->


  <div class='umesh_tab'>
    <table class="table table-bordered">      
      <thead>
        <tr>
          <th>
            <p>S.N</p>
          </th>
          <th>
            <p>Image</p>
          </th>
          <th>
            <p>Role</p>
          </th>
          <th>
            <p>Name</p>
          </th>
          <th>
            <p>Email</p>
          </th>
          <th>
            <p>Mobile</p>
          </th>
          <th>
            <p>Votar Id</p>
          </th>
          <th>
            <p>Aadhar</p>
          </th>
          <th>
            <p>Address</p>
          </th>
          <th>
            <p>Pan</p>
          </th>
          <th>
            <p>Joining Date</p>
          </th>
          <th>
            <p>Exit Date</p>
          </th>
          <th>
            <p>Bank Name</p>
          </th>
          <th>
            <p>Account No</p>
          </th>
          <th>
            <p>IFSC</p>
          </th>
          <th>
            <p>Micr Code</p>
          </th>
          <th>
            <p>Created On</p>
          </th>
          <th>
            <p>Action</p>
          </th>
        </tr>

      </thead>
      <tbody id='sdfsdfdsfs'>

        @foreach($user as $key=>$val)

        <tr>
          <td>{{$val->id}}</td>
          <td></td>
          <td>{{$val->name}}</td>
          <td>{{$val->role}}</td>
          <td>{{$val->email}}</td>
          <td>{{$val->mobile}}</td>
          <td>{{$val->votar_id}}</td>
          <td>{{$val->aadhar}}</td>
          <td>{{$val->address}}</td>
          <td>{{$val->pan}}</td>
          <td>{{$val->joining_date}}</td>
          <td>{{$val->exit_date}}</td>
          <td>{{$val->bank_name}}</td>
          <td>{{$val->account_no}}</td>
          <td>{{$val->ifsc}}</td>
          <td>{{$val->micr_code}}</td>
          <td>{{$val->created_at}}</td>
          
          <td class="flex">
            @if($val->block==0)
            <a href="{{url('admin/user-block',['id'=>encrypt($val->id),'status'=>1])}}"><button class="btn btn-success">Block</button></a>
            @else
            <a href="{{url('admin/user-block',['id'=>encrypt($val->id),'status'=>0])}}"><button class="btn btn-danger">UnBlock</button></a>

            @endif
            <form action="{{url('admin/user-delete',['id'=>encrypt($val->id)])}}" method="POST" id="deleteExcersice">
              @csrf

              <a href="javascript:void(0);" onclick="submitForm()"><button class="btn btn-danger">Delete</button></a>
            </form>
            <a href="{{url('admin/edit-user/'.$val->id)}}"><button type="submit" class="btn btn-info">Edit</button></a>
          </td>
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>


  <!-- /.content -->

</div>

<!-- /.content-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
  function submitForm() {
    $("#deleteExcersice").submit();
  }
</script>

<script type="text/javascript">
  $(document).ready(function(ddds) {
    $("#filter").on('submit', (function(ddds) {
      ddds.preventDefault();
      $.ajax({
        url: "{{url('admin/filter-data')}}",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          $("#sdfsdfdsfs").html(data)
        },
        error: function() {}
      });
    }));
  });
</script>

<script>
  function qualification(value) {
    $.get('{{url("qulificationfild")}}/' + value, function(dta) {
      $("#coursename").html(dta);
    });
  }
</script>
<script>
  $("#coursename").change(function() {
    $.get('{{url("qulificationfild1")}}/' + $(this).val(), function(dta) {
      $("#coursetype").html(dta);
    });
  });
</script>

<script>
  $('#select_res:button').click(function() {
    var checked = !$(this).data('checked');
    $('.selectres').prop('checked', checked);
    $(this).val(checked ? 'uncheck all' : 'check all')
    $(this).data('checked', checked);
  });
  $("#download_res").click(function() {
    var userID = [];
    $.each($("input[name='userID[]']:checked"), function() {
      userID.push($(this).val());
    });
    if (userID.length <= 1) {
      alert("Select Atleat 2 user");
      return false;
    }

    $.get('https://jobssolution.in/pdf/' + userID, function(dta) {
      window.open(dta, '_blank');
    });
  })
</script>
<script>
  $("#download_profile_res").click(function() {
    var userID = [];
    $.each($("input[name='userID[]']:checked"), function() {
      userID.push($(this).val());
    });
    if (userID.length <= 1) {
      alert("Select Atleat 2 user");
      return false;
    }

    $.get('https://jobssolution.in/admin/user-resume/' + userID, function(dta) {
      window.open(dta, '_blank');
    });
  })
</script>


@endsection('contents')