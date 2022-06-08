@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <!-- button -->
        <div class="row mt-2">
            <div class="col-md-2 mt-2">
                <a href="#modal" type="button" data-toggle="modal" data-target="#addmember">
                    <div class="button-hell text-center">
                        <i class="fa-solid fa-circle-plus mr-2"></i>Add Package
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
        <h4 class="mt-4"><b>Package</b></h4>
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
                                <th>ID Package</th>
                                <th>Package Name</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($dpak as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$item->IDPaket}}</td>
                                <td>{{$item->NamaPaket}}</td>
                                <td>{{$item->Harga}}</td>
                                <td>{{date("d/m/Y", strtotime($item->created_at))}}</td>
                                <td>{{date("H:i", strtotime($item->created_at))}}</td>
                            </tr>
                        @endforeach
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
                    <h5 class="modal-title" id="addmemberLabel"><b>Add Package</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark" style=color:#DC2626;></i></span>
                    </button>
                </div>
                <div class="modal-body">
                        <form method="post" action="/simpanpaket">
                        @csrf
                        <div class="row">
                            <!-- <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>ID Package</b></label>
                                <input type="text" class="form-control" placeholder="ID Package">
                            </div> -->
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Package Name</b></label>
                                <input type="text" class="form-control @error('namapaket') is-invalid @enderror" name="namapaket" id="namapaket"
                                placeholder="Nama Paket" required value="{{old('namapaket')}}">
                                @error('namapaket')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>Price</b></label>
                                <input type="number" class="form-control @error('hpaket') is-invalid @enderror" name="hpaket" id="hpaket"
                                placeholder="Harga Paket" required value="{{old('hpaket')}}">
                                @error('hpaket')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!-- <div class="col-md-6 col-xs-12 mt-1">
                                <label><b>ID User</b></label>
                                <input type="text" class="form-control" placeholder="ID User">
                            </div> -->

                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mt-1">
                                <div class="mt-2">
                                    <button type="submit" class="btn button-hell">Add package</button>
                                    <!-- <a>
                                        <div type="submit" class="button-hell text-center">
                                            Add Package
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