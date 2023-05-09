@extends('sales.layouts.adminMaster')
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
                        <p>Date</p>
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
                        <p>Client Mobile</p>
                    </th>
                    <th>
                        <p>Report Title</p>
                    </th>
                    <th>
                        <p>Client Company</p>
                    </th>
                    <th>
                        <p>Client Region</p>
                    </th>
                    <th>
                        <p>Client Country</p>
                    </th>
                    <th>
                        <p>Client Linkedin ID</p>
                    </th>
                    <th>
                        <p>Description</p>
                    </th>
                    <th>
                        <p>Client Requirements</p>
                    </th>
                    <th>
                        <p>Raise To Research</p>
                    </th>
                    <th>
                        <p>Sales Comments</p>
                    </th>
                    <th>
                        <p>Client Status</p>
                    </th>               
                    <th>
                        <p>Followup Date</p>
                    </th>      
                    <th>
                        <p>Reason Of Selecting Pipline</p>
                    </th>  
                    <th>
                        <p>Reason Of Selecting Lost</p>
                    </th>   
                    <th>
                        <p>Ticket Size</p>
                    </th>        
                    <th>
                        <p>Mode Of Payment</p>
                    </th>  
                    <th>
                        <p>Dispatch</p>
                    </th>  
                    <th>
                        <p>Dispatch Date</p>
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
                    <td>{{date('d-m-Y',strtotime($val->created_at))}}</td>
                    <td>{{$val->Assign_to}}</td>
                    <td>{{$val->client_name}}</td>
                    <td>{{$val->client_email}}</td>
                    <td>{{$val->client_mobile}}</td>
                    <td>{{$val->report_title}}</td>
                    <td>{{$val->client_company}}</td>
                    <td>{{$val->client_region}}</td>
                    <td>{{$val->client_country}}</td>
                    <td>{{$val->client_linkedin}}</td>
                    <td>{{$val->description}}</td>                   
                    <td>{{$val->client_requirements}}</td>                   
                    <td>{{$val->raise_to_research}}</td>                   
                    <td>{{$val->sales_comments}}</td>                   
                    <td>{{$val->client_status}}</td>                       
                    <td>{{$val->followup_date}}</td>                           
                    <td>{{$val->pipline_reason}}</td>                           
                    <td>{{$val->lost_reason}}</td>                           
                    <td>{{$val->ticket_size==0?'':$val->ticket_size}}</td>                           
                    <td>{{$val->mode_of_payment}}</td>                           
                    <td>{{$val->dispatch}}</td>                           
                    <td>{{$val->dispatch_date}}</td>  
                    <td>
                        <a href="{{url('sales/edit-client/'.$val->id)}}"><button type="submit" class="btn btn-warning">Edit</button></a>                        
                        <a href="{{url('sales/assign-to/'.$val->id)}}"><button type="submit" class="btn btn-info">Assign</button></a>                        
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