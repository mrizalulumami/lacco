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
                                <i class="icoli fa-solid fa-user-check"></i>
                            </div>
                            <div class="ml-5">
                                <h5 style="color: #64748B;">Verified member</h5>
                                <h3>346</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="dash-ic rounded-circle">
                                <i class="icoli fa-solid fa-user-xmark"></i>
                            </div>
                            <div class="ml-5">
                                <h5 style="color: #64748B;">Non-verified member</h5>
                                <h3>768</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="dash-ic rounded-circle">
                                <i class="icoli fa-solid fa-users"></i>
                            </div>
                            <div class="ml-5">
                                <h5 style="color: #64748B;">Members total</h5>
                                <h3>1482</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- button -->
        <div class="row mt-2">
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
        <h4 class="mt-4"><b>Non-Verified Member List</b></h4>
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
                <h3 class="tile-title">Responsive Table</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Member Code</th>
                                <th>Phone Number</th>
                                <th>Trustee</th>
                                <th>Trustee Phone Number</th>
                                <th>Package</th>
                                <th>Program</th>
                                <th>Camp</th>
                                <th>Camp Room</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kamar</td>
                                <td>02056743</td>
                                <td>081xxxxxxxxx</td>
                                <td>Udin</td>
                                <td>082xxxxxxxxx</td>
                                <td>Package</td>
                                <td>AFEC</td>
                                <td>6</td>
                                <td>13</td>
                                <td class="st-veri">Verified</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jamal</td>
                                <td>02056743</td>
                                <td>081xxxxxxxxx</td>
                                <td>Udin</td>
                                <td>082xxxxxxxxx</td>
                                <td>Package</td>
                                <td>AFEC</td>
                                <td>7</td>
                                <td>4</td>
                                <td class="st-veri">Verified</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- </main> -->
@endsection