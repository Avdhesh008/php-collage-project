@extends('tlsales.layouts.adminMaster')
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

    .selecttt {
        display: flex;
        align-items: center;
    }

    .selecttt select.form-control {
        padding: 0px 195px 0px 0px;
        margin-left: 12px;
    }

    .selecttt button.btn.btn-info {
        margin-left: 23px;
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
        <form action="{{url('tlsales/assign')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="" id="favcheck">
            <div class="selecttt">
                <a href="javascript:;" id="checkkaro" class="btn btn-warning checkkaro" > Select/Unselect All</a>
                <div class="formrow">
                    <select class="form-control" name="Assign_to">
                        <option value="">-Assign To-</option>
                        @foreach($assign1 as $assign)
                        <option value="{{$assign->name}}">{{$assign->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-info">Assign</button>
            </div>
        </form>
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
                        <p>Assign To</p>
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
                        <p>Action</p>
                    </th>
                </tr>

            </thead>
            <tbody id='sdfsdfdsfs'>

                @foreach($data as $key => $val)

                <tr>
                    <td>{{$key+1}}
                        <input type="checkbox" name="checkss[]" class="checkall" value="{{$val->id}}" id="check" onclick="checkkk()">
                    </td>
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
                    <td>
                        <a href="{{url('tlsales/edit_client/'.$val->id)}}"><button type="submit" class="btn btn-info">Assign</button></a>
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

<script>
    $('.checkkaro').click(function() {

        if ($('.checkall').prop('checked')) {
            $('.checkall').prop('checked', false);
        } else {
            $('.checkall').prop('checked', true);

        }

        var favorite = [];
        $.each($("input[name='checkss[]']:checked"), function() {
            favorite.push($(this).val());
        });
        $('#favcheck').val(favorite);
        
    });

    
    function checkkk()
    {
        var favorite = [];
        $.each($("input[name='checkss[]']:checked"), function() {
            favorite.push($(this).val());
        });
        $('#favcheck').val(favorite);
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