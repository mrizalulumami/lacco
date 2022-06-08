@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="dash-ic rounded-circle">
                                <div class="ml-2">
                                    <i class="icoli fa-solid fa-user-tie"></i>
                                </div>
                            </div>
                            <div class="ml-5">
                                <h5 style="color: #64748B;">Tutor</h5>
                                <h3>24</h3>
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
                        <i class="fa-solid fa-circle-plus mr-2"></i>Add Tutor
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
                        <option selected>Filter by Tutor</option>
                        <option value="1">#</option>
                    </select>
                </div>
            </div>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <!-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. -->
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div>
            <div class="tile">
                <!-- <h3 class="tile-title">Responsive Table</h3> -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>ID Tutor</th>
                                <th>Tutor Name</th>
                                <th>Address</th>
                                <th>Photo</th>
                                <th>WA Number</th>
                                <th>Email</th>
                                <th>Camp ID</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($dcamp as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$item->IDTutor}}</td>
                                <td>{{$item->NamaTutor}}</td>
                                <td>{{$item->Alamat}}</td>
                                <td>{{$item->Photo}}</td>
                                <td>{{$item->NoWA}}</td>
                                <td>{{$item->Email}}</td>
                                <td>{{$item->IDCamp}}</td>
                                <td>{{date("d/m/Y", strtotime($item->created_at))}}</td>
                                <td>{{date("H:i", strtotime($item->created_at))}}</td>
                            </tr>
                        @endforeach
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
                    <h5 class="modal-title" id="addmemberLabel"><b>Add Tutor</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark" style=color:#DC2626;></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/simpantutor" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Name</b></label>
                                <input type="text" class="form-control @error('namatutor') is-invalid @enderror" name="namatutor" id="namatutor"
                                placeholder="Nama Tutor" required value="{{old('namatutor')}}">
                                @error('namatutor')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Address</b></label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat"
                                placeholder="Alamat" required value="{{old('alamat')}}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Photo</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" name="photo" id="photo" 
                                    required value="{{old('photo')}}" aria-describedby="photo">
                                    <label class="custom-file-label" for="photo">choose</label>
                                    @error('photo')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Whatsapp Number</b></label>
                                <input type="number" class="form-control @error('nowa') is-invalid @enderror" name="nowa" id="nowa"
                                placeholder="No WA" required value="{{old('nowa')}}">
                                @error('nowa')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>E-Mail</b></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                placeholder="Email" required value="{{old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Lokasi Camp</b></label>
                                <div class="input-group">
                                    <select class="custom-select" id="camplokasi" name="camplokasi">
                                        @foreach($dcamp as $item)
                                        <option value="{{ $item->IDCamp }}">{{ $item->NamaCamp }} - {{ $item->Lokasi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <div class="mt-2">
                                    <button type="submit" class="button-hell">Add Tutor</button>
                                    <!-- <a href="#">
                                        <div class="button-hell text-center">
                                            Add Tutor
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection