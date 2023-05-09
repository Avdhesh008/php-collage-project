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

                    <h1>Client's</h1>

                    <!-- <a href="{{url('admin/excersie/create')}}" class="btn btn-info mt-3">Excersice Add</a> -->
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="{{url('admin/add_client')}}" class="btn btn-info">Add Client</a>
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
                        <p>Client Address</p>
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
                    <td>{{$key+1}}</td>                   
                    <td>{{$val->assign_to_salesTl}}</td>
                    <td>{{$val->client_name}}</td>
                    <td>{{$val->client_email}}</td>
                    <td>{{$val->client_mobile}}</td>
                    <td>{{$val->client_address}}</td>
                    <td>{{$val->description}}</td>
                    <td>
                        <form action="{{url('admin/delete-client',['id'=>encrypt($val->id)])}}" method="POST" id="delete_client">
                            @csrf
                            <a href="javascript:void(0);" onclick="submitForm()"><button class="btn btn-danger">Delete</button></a>
                        </form>
                        <a href="{{url('admin/edit_client/'.$val->id)}}"><button type="submit" class="btn btn-info">Edit</button></a>
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
@endsection('contents')