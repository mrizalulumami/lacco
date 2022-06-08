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
        <h4 class="mt-4"><b>Program</b></h4>
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
                                <th>Program Name</th>
                                <th>Duration</th>
                                <th>ID Program</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ENG01</td>
                                <td>2 WEEK</td>
                                <td>ENG2022</td>
                                <td>IDR. 700K</td>
                                <td>18/04/2021</td>
                                <td>18:00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ENG01</td>
                                <td>2 WEEK</td>
                                <td>ENG2022</td>
                                <td>IDR. 700K</td>
                                <td>18/04/2021</td>
                                <td>18:00</td>
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
                                <label><b>Program Name</b></label>
                                <input type="text" class="form-control" placeholder="Program Name">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>Duration</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Duration.</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>ID Program</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>ID Program.</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Price</b></label>
                                <input type="text" class="form-control" placeholder="Price">
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
