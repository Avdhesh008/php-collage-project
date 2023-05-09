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

                    <h1>PDF List</h1>

                    <!-- <a href="{{url('admin/excersie/create')}}" class="btn btn-info mt-3">Excersice Add</a> -->
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="{{url('research/create_pdf')}}" class="btn btn-primary">Create Pdf</a>
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
                        <p>Client Name</p>
                    </th>
                    <th>
                        <p>Company Type</p>
                    </th>
                    <th>
                        <p>Company Name</p>
                    </th>
                    <th>
                        <p>Start Year</p>
                    </th>
                    <th>
                        <p>End Year</p>
                    </th>
                    <th>
                        <p>Created AClient Listt</p>
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
                    <td>{{$val->company_type}}</td>
                    <td>{{$val->company_type}}</td>
                    <td>{{$val->company_name}}</td>
                    <td>{{$val->start_year}}</td>
                    <td>{{$val->end_year}}</td>
                    <td>{{$val->created_at}}</td>                   
                                      
                    <td>
                        <a href="{{url('research/downloadpdf')}}/{{$val->id}}" target="_blank" id="anchortag{{$val->id}}"><button type="submit" class="btn btn-info">Download PDF</button></a>
                        <div id="SPINNNER{{$val->id}}" style="display: none;" class="spinner-border text-info" role="status"><span class="sr-only">Loading...</span></div>   
                    </td>
                </tr>
            @endforeach
         
            </tbody>
        </table>
    </div>


    <!-- /.content -->

</div>
<div id="msss"></div>
<!-- /.content-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
     function downloadpdf(id) {
        // $("#anchortag"+id).hide();
        // $("#SPINNNER"+id).show();
       $.get('{{url("/research/downloadpdf")}}/'+id,function(data){
        // $("#anchortag"+id).show();
        // $("#SPINNNER"+id).hide();
        window.open(data,'_blank');
        //alert(data);
        //$("#msss").html(data);
       })
    }
</script>

@endsection('contents')