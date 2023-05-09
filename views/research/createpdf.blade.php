@extends('research.layouts.adminMaster')
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

    .ravi {
        border: 1px solid #8080806e;
        padding: 20px;
        border-radius: 2px;
        margin-top: 20px;
    }

    /* .col-md-12.Competition {
    display: flex;
    justify-content: space-between;
} */
    .segment-wrapper {
        border: 1px solid;
        padding-top: 20px;
        padding-left: 20px;
        padding-bottom: 35px;
        margin-top: 20px;
    }

    .row.seg-down {
        border-top: 1px solid grey;
        margin-top: 27px;
        border-radius: 6px;
        border-width: 0px;
    }
</style>



<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Create Requirement</h1>


                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <!-- <li class="breadcrumb-item"><a href="{{url('admin/employee')}}" class="btn btn-info">Show Employee</a></li> -->



                    </ol>

                </div>

            </div>

        </div><!-- /.container-fluid -->

    </section>
    <section id="mnbvcxx">
        <div class="userccount">
            <div class="formpanel">
                <!-- Personal Information -->

                <form action="{{url('research/create_pdf')}}" method="POST" id="">
                    @csrf

                    <div class=" my_uired_kl">
                        <div class="upperform">
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>Report title</label>
                                        <input required type="text" name="company_name" value="" class="form-control" placeholder="Employee Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>Company Type</label>
                                        <select class="form-control" name="company_type">
                                            <option value="Reports N Market">Reports N Market</option>
                                            <option value="Research Insights">Research Insights</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>Start Year</label>
                                        <input required type="number" name="start_year" value="" class="form-control" placeholder="Start Year" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>End Year</label>
                                        <input required type="number" name="end_year" value="" class="form-control" placeholder="End Year" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="segment ravi" id="segmentadd">
                            <div class="segment-head">
                                <h3>Report Scope And Market Segmentation</h3>
                            </div>
                            <div class="segment-wrapper">
                                <div class="segmentmain">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="formrow">
                                                        <label>Segment Title</label>
                                                        <input required type="text" name="mr_seg[0]" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="formrow">
                                                        <a href="javascript:;" id="segmentationadddbtn" onclick="add_segment(0)" class="btn btn-primary mt-4">Add more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="segment-down" id="addsegtype0">
                                    <div class="row seg-down">
                                        <div class="col-sm-12 ">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="formrow">
                                                        <label>Segment Type</label>
                                                        <input required type="text" name="seg_type[0][0]" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="formrow">
                                                        <a href="javascript:;" id="add_segmentbtn0" class="btn btn-primary mt-4" onclick="add_segtype(this.id,0,0)">Add more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="addsegsubtype000">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="formrow">
                                                        <label>Segment Sub Type </label>
                                                        <input  type="text" name="seg_sub_type[0][0][0]" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="formrow">
                                                        <a href="javascript:;" class="btn btn-primary mt-4" id="add_segmensubtypetbtn000" onclick="add_segsubtype(this.id,0,0,0)">Add more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="competiotnindexs" id="competiotnindexs">
                            <div class="row ravi">
                                <div class="col-md-12 Competition">
                                    <h3>Competition Index</h3>
                                    <a href="javascript:;" class="btn btn-primary " onclick="add_Competition()">Add more</a>
                                </div>
                                <div class="col-md-12">
                                    <div class="formrow">
                                        <label>Company</label>
                                        <input required type="text" name="company[]" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-info" type="submit">Submit</button>

            </div>
            </form>
        </div>
</div>
</section>



<input required type="hidden" value='1' id="comptetionaddd">
@endsection('contents')
<script>
    function add_segment(j) {
        i = 1 + j;
        $("#segmentationadddbtn").attr("onclick", "add_segment(" + i + ")");
        var a = '<div class="segment-wrapper" id="remsegmentwrapper' + i + '"> <div class="segmentmain"> <div class="row"> <div class="col-sm-12"> <div class="row"> <div class="col-md-10"> <div class="formrow"> <label>Segment Title</label> <input required type="text" name="mr_seg[' + i + ']" class="form-control" > </div></div><div class="col-md-2"> <div class="formrow"> <a href="javascript:;" onclick="remove_segment(' + i + ')" class="btn btn-danger mt-4">Remove</a> </div></div></div></div></div></div><div class="segment-down" id="addsegtype' + i + '"> <div class="row seg-down"> <div class="col-sm-12 " > <div class="row" > <div class="col-md-10"> <div class="formrow"> <label>Segment Type</label> <input required type="text" name="seg_type[' + i + '][0]" value="" class="form-control"> </div></div><div class="col-md-2"> <div class="formrow"> <a href="javascript:;" id="add_segmentbtn' + i + '" class="btn btn-primary mt-4" onclick="add_segtype(this.id,' + i + ',0)">Add more</a> </div></div></div></div><div class="col-sm-12" id="addsegsubtype' + i + '00"> <div class="row" > <div class="col-md-10"> <div class="formrow"> <label>Segment Sub Type </label> <input  type="text" name="seg_sub_type[' + i + '][0][0]" value="" class="form-control" > </div></div><div class="col-md-2"> <div class="formrow"> <a href="javascript:;" class="btn btn-primary mt-4" id="add_segmensubtypetbtn' + i + '00" onclick="add_segsubtype(this.id,' + i + ',0,0)">Add more</a> </div></div></div></div></div></div></div>';
        $("#segmentadd").append(a);




    }
    /////////
    function add_segtype(id, i, j) {
        l = j + 1;
        $("#" + id).attr("onclick", "add_segtype(this.id," + i + "," + l + ")");
        var a = '<div class="row seg-down" id="removesegtype' + i + l + '"><div class="col-sm-12 " ><div class="row" ><div class="col-md-10"><div class="formrow"><label>Segment Type</label><input required type="text" name="seg_type[' + i + '][' + l + ']" value="" class="form-control"></div></div><div class="col-md-2"><div class="formrow"><a href="javascript:;" id="add_segmentbtn' + i + l + '" class="btn btn-danger mt-4" onclick="remove_segtype(' + i + ',' + l + ')">Remove</a></div></div></div></div><div class="col-sm-12" id="addsegsubtype' + i + l + '0"><div class="row"><div class="col-md-10"><div class="formrow"><label>Segment Sub Type </label><input  type="text" name="seg_sub_type[' + i + '][' + l + '][0]" value="" class="form-control" ></div></div><div class="col-md-2"><div class="formrow"><a href="javascript:;" class="btn btn-primary mt-4" id="add_segmensubtypetbtn' + i + l + '0" onclick="add_segsubtype(this.id,' + i + ',' + l + ',0)">Add more</a></div></div></div></div></div>';
        $("#addsegtype" + i).append(a);

    }
    /////////////
    function remove_segtype(i, j) {
        $("#removesegtype" + i + j).remove()

    }

    function add_segsubtype(id, i, j, k) {
        l = k + 1;
        $("#" + id).attr("onclick", "add_segsubtype(this.id," + i + "," + j + "," + l + ")");
        var a = '<div class="row" id="removesegsubtype' + i + j + l + '"> <div class="col-md-10"> <div class="formrow"> <label>Segment Sub Type </label> <input  type="text" name="seg_sub_type[' + i + '][' + j + '][' + l + ']" value="" class="form-control" > </div></div><div class="col-md-2"> <div class="formrow"> <a href="javascript:;" class="btn btn-danger mt-4" id="add_segmensubtypetbtn0" onclick="remove_segsubtype(' + i + ',' + j + ',' + l + ')">Remove</a> </div></div></div>';
        $("#addsegsubtype" + i + j + '0').append(a);

    }

    function remove_segsubtype(i, j, k) {
        $("#removesegsubtype" + i + j + k).remove()

    }

    function remove_segment(id) {
        $("#remsegmentwrapper" + id).remove()
    }

    function add_Competition() {
        var id = $("#comptetionaddd").val();
        var a = '<div class=" row ravi" id="removecompetiton' + id + '"><div class="col-md-12 Competition"><h3></h3><a href="javascript:;" class="btn btn-danger " onclick="remove_Competition(' + id + ')">Remove</a></div><div class="col-md-12"><div class="formrow"><label>Company</label><input required type="text" name="company[]" class="form-control" ></div></div></div>';
        id = id + 1;
        $("#comptetionaddd").val(id);
        $("#competiotnindexs").append(a);
    }

    function remove_Competition(id) {
        $("#removecompetiton" + id).remove();
    }
</script>