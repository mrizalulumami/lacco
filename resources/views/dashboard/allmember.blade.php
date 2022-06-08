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
                <a href="#modal" type="button" data-toggle="modal" data-target="#addmember">
                    <div class="button-hell text-center">
                        <i class="fa-solid fa-circle-plus mr-2"></i>Add Member
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
        <h4 class="mt-4"><b>Member List</b></h4>
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
                                <td class="st-noveri">Non-Verified</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- </main> -->

    <!-- ============================================================================================================ -->
    <!-- modal add member -->
    <div class="modal fade" id="addmember" tabindex="-1" aria-labelledby="addmemberLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addmemberLabel"><b>Add Member</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark" style=color:#DC2626;></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Member Code</b></label>
                                <input type="text" class="form-control" placeholder="~Type your member code.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Full Name</b></label>
                                <input type="text" class="form-control" placeholder="Type your full name here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>Gender</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose your gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Address</b></label>
                                <input type="text" class="form-control" placeholder="Type your address here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Birthplace</b></label>
                                <input type="text" class="form-control" placeholder="Type your birthplace here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Birthdate</b></label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    placeholder="Choose your birthdate.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>Package</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose your package</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>Program Duration</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose your program duration.</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>Camp</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose your camp.</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>Camp Room</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose your camp room.</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Arival Date</b></label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    placeholder="Choose your arival date.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label for="exampleInputEmail1"><b>Last Education</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose your last education.</option>
                                        <option value="1">#</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>E-mail</b></label>
                                <input type="text" class="form-control" placeholder="Type your e-mail here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Phone Number</b></label>
                                <input type="text" class="form-control" placeholder="Type your phone number here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Mother's Name</b></label>
                                <input type="text" class="form-control" placeholder="Type your mother name here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Father's Name</b></label>
                                <input type="text" class="form-control" placeholder="Type your father's namehere.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Emergency Number</b></label>
                                <input type="text" class="form-control" placeholder="Type your address here.">
                            </div>
                            <!-- auth -->
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Username</b></label>
                                <input type="text" class="form-control" placeholder="Type your username here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Password</b></label>
                                <input type="password" class="form-control" placeholder="Type your password here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Re-enter Password</b></label>
                                <input type="password" class="form-control" placeholder="Type your password here.">
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <div class="mt-2">
                                    <a href="#">
                                        <div class="button-hell text-center">
                                            Add Member
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

    <!-- end modal add member -->

    <!-- modal Edit Member -->
    <div class="modal fade" id="editmember" tabindex="-1" aria-labelledby="editmemberLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmemberLabel"><b>Edit Member</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark" style=color:#DC2626;></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table" id="table-goblok">
                            <thead class="thead-light">
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
                                    <th>
                                        <div class="input-group">
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Status</option>
                                                <option value="1" class="st-veri">Verified</option>
                                                <option value="1" class="st-noveri">Non-Verified</option>
                                            </select>
                                        </div>
                                    </th>
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
                                    <th>
                                        <div class="input-group">
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Status</option>
                                                <option value="1" class="st-veri">Verified</option>
                                                <option value="1" class="st-noveri">Non-Verified</option>
                                            </select>
                                        </div>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal edit member -->
    <!-- ============================================================================================================ -->

    

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="../../assets/js/dash/plugins/chart.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript" src="../../assets/js/dash/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../assets/js/dash/plugins/bootstrap-datepicker.min.js"></script>


    <!-- data table -->
    <script type="text/javascript">$('#table-goblok').DataTable();</script>

    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datepicker').datepicker();
            "format" = "mm-dd-yy",
                "startDate" = "-5d",
                "endDate" = "09-15-2017",
                "keyboardNavigation" = false
        });
    </script>


    <!-- data table edit -->
    <script>
        var table = document.getElementById('table-goblok');
        var cells = table.getElementsByTagName('td');

        for (var i = 0; i < cells.length; i++) {
            cells[i].onclick = function () {
                if (this.hasAttribute('data-clicked')) {
                    return;
                }
                this.setAttribute('data-clicked', 'yes');
                this.setAttribute('data-text', this.innerHTML);

                var input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.value = this.innerHTML;

                input.onblur = function () {
                    var td = input.parentElement;
                    var orig_text = input.parentElement.getAttribute('data-text');
                    var current_text = this.value;

                    if (orig_text != current_text) {
                        //ada perubahan text
                        // save ke database
                        td.removeAttribute('data-clicked');
                        td.removeAttribute('data-text');
                        td.innerHTML = current_text;
                        td.style.cssText = 'padding: 0.75rem';
                        console.log(orig_text + ' di ganti dengan ' + current_text);
                    } else {
                        td.removeAttribute('data-clicked');
                        td.removeAttribute('data-text');
                        td.innerHTML = orig_text;
                        td.style.cssText = 'padding: 0.75rem';
                        console.log('Ga ada Perubahan');
                    }

                }

                input.onkeypress = function () {
                    if (event.keyCode == 13) {
                        this.blur();
                    }
                }

                this.innerHTML = '';
                this.style.cssText = 'padding: 0px, 0px';
                this.append(input);
                this.firstElementChild.select();
            }
        }
    </script>
@endsection