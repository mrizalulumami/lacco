@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1>{{$title}}</h1>
    <h4>Isi form di bawah untuk menambah data tutor</h4>
        <form method="post" action="/simpantutor">
            @csrf
            <div class="row">
                <div class="col-md-4">
                        <label for="namatutor"><b>Nama Tutor</b></label>
                        <div class="form-group">
                            <input type="text" class="form-control @error('namatutor') is-invalid @enderror" name="namatutor" id="namatutor"
                            placeholder="Nama Tutor" required value="{{old('namatutor')}}">
                            @error('namatutor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <label for="alamat"><b>Alamat</b></label>
                        <div class="form-group">
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat"
                            placeholder="Alamat" required value="{{old('alamat')}}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <label for="email"><b>Email</b></label>
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                            placeholder="Email" required value="{{old('email')}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                </div>
                <div class="col-md-4">
                        <label for="nowa"><b>Nomor WA</b></label>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nowa') is-invalid @enderror" name="nowa" id="nowa"
                            placeholder="No WA" required value="{{old('nowa')}}">
                            @error('nowa')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <label for="camplokasi"><b>Camp dan Lokasi</b></label>
                        <div class="input-group">
                            <select class="custom-select" id="camplokasi" name="camplokasi">
                                @foreach($dcamp as $item)
                                <option value="{{ $item->IDCamp }}">{{ $item->NamaCamp }} - {{ $item->Lokasi }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="col-md-4">
                        <label for="photo"><b>Upload Foto Tutor</b></label>
                        <div class="form-group">
                            <input type="text" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo"
                            placeholder="Photo" required value="{{old('photo')}}">
                            @error('photo')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- <button type="button" class="btn btn-secondary ml-1">Bersihkan</button> -->
                    </div>
                </div>
            </div>
            
        </form>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <!-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. -->
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Tutor</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Photo</th>
                    <th scope="col">No WA</th>
                    <th scope="col">Email</th>
                    <th scope="col">Camp - Lokasi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dcamp as $item)
                <tr>
                    <th scope="row">#</th>
                    <td>{{$item->NamaTutor}}</td>
                    <td>{{$item->Alamat}}</td>
                    <td>{{$item->Photo}}</td>
                    <td>{{$item->NoWA}}</td>
                    <td>{{$item->Email}}</td>
                    <td>{{$item->NamaCamp}} - {{$item->Lokasi}}</td>
                    
                    <td>
                        <div class="d-flex">
                            <a href="#" class="mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                    class="fa-solid fa-pen"></i></a>
                            <a href="#" class="ml-2" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                    class="fa-solid fa-trash" style="color: #000;"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                <!-- <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                    class="fa-solid fa-pen"></i></a>
                            <a href="#" class="ml-2" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                    class="fa-solid fa-trash" style="color: #000;"></i></a>
                        </div>
                    </td>
                </tr> -->
                <!-- <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>the Bird</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                    class="fa-solid fa-pen"></i></a>
                            <a href="#" class="ml-2" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                    class="fa-solid fa-trash" style="color: #000;"></i></a>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
@endsection