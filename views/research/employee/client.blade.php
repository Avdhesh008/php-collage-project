@extends('research.layouts.adminMaster')
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
        width: 70px;
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

                    <h1>Client List</h1>

                    <!-- <a href="{{url('admin/excersie/create')}}" class="btn btn-info mt-3">Excersice Add</a> -->
                </div>

                <!-- <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="{{url('email/add_client')}}" class="btn btn-info">Add Client</a>
                        </li>
                    </ol>

                </div> -->

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
                        <p>Client Name</p>
                    </th>
                    <th>
                        <p>Client Email</p>
                    </th>
                    <th>
                        <p>Client Mobile</p>
                    </th>
                    <th>
                        <p>Client Address</p>
                    </th>
                    <th>
                        <p>Description</p>
                    </th>
                    <th>
                        <p>Brief Description</p>
                    </th>
                    <th>
                        <p>Action</p>
                    </th>
                </tr>

            </thead>
            <tbody id='sdfsdfdsfs'>
            @foreach($client as $key => $val)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$val->client_name}}</td>
                    <td>{{$val->client_email}}</td>
                    <td>{{$val->client_mobile}}</td>
                    <td>{{$val->client_address}}</td>
                    <td>{{$val->description}}</td>                   
                    <td>{{$val->brief_description}}</td>                   
                    <td>
                        <a href="{{url('research/create_pdf/'.$val->id)}}"><button type="submit" class="btn btn-info">Submit Feedback</button></a>                        
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
        $("#delete_client").submit();
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