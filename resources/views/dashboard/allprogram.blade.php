@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <!-- <main class="app-content"> -->
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="dash-ic rounded-circle">
                                <div class="ml-2">
                                    <i class="icoli fa-solid fa-clipboard-list"></i>
                                </div>
                            </div>
                            <div class="ml-5">
                                <h5 style="color: #64748B;">Programs</h5>
                                <h3>14</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- button -->
        <div class="row mt-2">
            <div class="col-md-2 mt-2">
                <a href="#modal" type="button" data-toggle="modal" data-target="#addmember">
                    <div class="button-hell text-center">
                        <i class="fa-solid fa-circle-plus mr-2"></i>Add Program
                    </div>
                </a>
            </div>
            <div class="col-md-2 mt-2">
                <a href="#modal" type="button" data-toggle="modal" data-target="#editmember">
                    <div class="button-helldit text-center">
                        <i class="fa-solid fa-pen-to-square mr-2"></i>Edit
                    </div>
                </a>
            </div>
            <div class="col-md-2 mt-2">
                <a href="#">
                    <div class="button-hellprint text-center">
                        <i class="fa-solid fa-print mr-2"></i>Print
                    </div>
                </a>
            </div>
        </div>
        <!-- table -->
        <h4 class="mt-4"><b>Program History</b></h4>
        <div class="row mt-2 mb-4">
            <div class="col-md-2 mt-2">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Filter by Program</option>
                        <option value="1">#</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Filter by Status</option>
                        <option value="1">#</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Filter by Package</option>
                        <option value="1">#</option>
                    </select>
                </div>
            </div>
        </div>
        <div>
            <div class="tile">
                <!-- <h3 class="tile-title">Responsive Table</h3> -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>ID Riwayat</th>
                                <th>Member Code</th>
                                <th>ID Program</th>
                                <th>Cetificate</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>ID User</th>
                                <th>Period</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PROG2022</td>
                                <td>02056743</td>
                                <td>ENG2022</td>
                                <td>Online</td>
                                <td>18/04/2021</td>
                                <td>18:00</td>
                                <td>ABC123</td>
                                <td>2022</td>
                                <td class="st-veri">Done</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>PROG2022</td>
                                <td>02056743</td>
                                <td>ENG2022</td>
                                <td>Online</td>
                                <td>18/04/2021</td>
                                <td>18:00</td>
                                <td>ABC123</td>
                                <td>2022</td>
                                <td class="st-noveri">On-Going</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- </main> -->

    <!-- ================================================================================================= -->
    <!-- modal add member -->
    <div class="modal fade" id="addmember" tabindex="-1" aria-labelledby="addmemberLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addmemberLabel"><b>Add Program</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark" style=color:#DC2626;></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>ID Riwayat</b></label>
                                <input type="text" class="form-control" placeholder="ID Riwayat">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Member Code</b></label>
                                <input type="text" class="form-control" placeholder="Member code">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>ID Program</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose ID</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Certificate</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Upload from local (Max. file size
                                        2MB)</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Id User</b></label>
                                <input type="text" class="form-control" placeholder="ID User">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Periode</b></label>
                                <input type="text" class="form-control" placeholder="Periode">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>Status</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose Status</option>
                                        <option value="1">On Going</option>
                                        <option value="2">Done</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <div class="mt-2">
                                    <a href="#">
                                        <div class="button-hell text-center">
                                            Add Program
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
