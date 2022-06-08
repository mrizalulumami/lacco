@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="dash-ic rounded-circle">
                                <i class="icoli fa-solid fa-users"></i>
                            </div>
                            <div class="ml-5">
                                <h5 style="color: #64748B;">Users</h5>
                                <h3>1532</h3>
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
                        <i class="fa-solid fa-circle-plus mr-2"></i>Add User
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
            <div class="col-md-2 mt-2">
                <a href="#">
                    <div class="button-veri text-center">
                        <i class="fa-solid fa-download mr-2"></i>Export
                    </div>
                </a>
            </div>
        </div>
        <!-- table -->
        <h4 class="mt-4"><b>User</b></h4>
        <div class="row mt-2 mb-4">
            <div class="col-md-2 mt-2">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Filter by User</option>
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
                                <th>ID User</th>
                                <th>Full Name</th>
                                <th>USername</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>21020497</td>
                                <td>Siren Petrik</td>
                                <td>SIP</td>
                                <td>******</td>
                                <td>Admin</td>
                                <td>18/21/21</td>
                                <td>10:00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>21020497</td>
                                <td>Siren Petrik</td>
                                <td>SIP</td>
                                <td>******</td>
                                <td>Admin</td>
                                <td>18/21/21</td>
                                <td>10:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- ================================================================================================= -->
    <!-- modal add member -->
    <div class="modal fade" id="addmember" tabindex="-1" aria-labelledby="addmemberLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addmemberLabel"><b>Add User</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark" style=color:#DC2626;></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>User Level</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>User Level</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>ID User</b></label>
                                <input type="text" class="form-control" placeholder="ID User">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Full Name</b></label>
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Photo</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Upload from local (Max. file size
                                        2MB)</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Username</b></label>
                                <input type="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Password</b></label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Re-Password</b></label>
                                <input type="password" class="form-control" placeholder="Re-Password">
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <div class="mt-2">
                                    <a href="#">
                                        <div class="button-hell text-center">
                                            Add User
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