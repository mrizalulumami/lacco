@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <!-- button -->
        <div class="row mt-2">
            <div class="col-md-2 mt-2">
                <a href="#modal" type="button" data-toggle="modal" data-target="#addmember">
                    <div class="button-hell text-center">
                        <i class="fa-solid fa-circle-plus mr-2"></i>Add Camp
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
                        <option selected>Filter by Camp Name</option>
                        <option value="1">#</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Filter by Location</option>
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
                                <th>ID Camp</th>
                                <th>Camp Name</th>
                                <th>Location</th>
                                <th>Location Maps</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>KED0001</td>
                                <td>EDELWIS</td>
                                <td>KEDIRI</td>
                                <td><a
                                        href="https://www.google.com/maps/place/Pare,+Kediri,+Pare,+Kediri+Regency,+East+Java/@-7.7655681,112.1978463,21z/data=!4m5!3m4!1s0x2e785dc96a6c44d7:0x2109aa2c8d6b91e6!8m2!3d-7.765512!4d112.197899">
                                        <i class="fa-solid fa-location-dot"></i> Maps</a>
                                </td>
                                <td>18/04/2021</td>
                                <td>18:00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>KED0002</td>
                                <td>EDELWIS</td>
                                <td>KEDIRI</td>
                                <td><a
                                        href="https://www.google.com/maps/place/Pare,+Kediri,+Pare,+Kediri+Regency,+East+Java/@-7.7655681,112.1978463,21z/data=!4m5!3m4!1s0x2e785dc96a6c44d7:0x2109aa2c8d6b91e6!8m2!3d-7.765512!4d112.197899">
                                        <i class="fa-solid fa-location-dot"></i> Maps</a>
                                </td>
                                <td>18/04/2021</td>
                                <td>18:00</td>
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
                    <h5 class="modal-title" id="addmemberLabel"><b>Add Camp</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark" style=color:#DC2626;></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>ID Camp</b></label>
                                <input type="text" class="form-control" placeholder="ID Camp">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Camp Name</b></label>
                                <input type="text" class="form-control" placeholder="Camp Name">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Location Name</b></label>
                                <input type="text" class="form-control" placeholder="Location Name">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Location Maps</b></label>
                                <input type="text" class="form-control" placeholder="Location Maps">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Capacity</b></label>
                                <input type="text" class="form-control" placeholder="Capacity">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Camp Photo</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Upload from local (Max. file size
                                        2MB)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <div class="mt-2">
                                    <a href="#">
                                        <div class="button-hell text-center">
                                            Add Camp
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