@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1>{{$title}}</h1>
    <h4>Isi form di bawah untuk menambah data {{$active}}</h4>
        <form method="post" action="/simpanpaket">
            @csrf
            <div class="row">
                <div class="col-md-4">
                        <label for="namapaket"><b>Nama Paket</b></label>
                        <div class="form-group">
                            <input type="text" class="form-control @error('namapaket') is-invalid @enderror" name="namapaket" id="namapaket"
                            placeholder="Nama Paket" required value="{{old('namapaket')}}">
                            @error('namapaket')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <label for="hpaket"><b>Harga Paket</b></label>
                        <div class="form-group">
                            <input type="number" class="form-control @error('hpaket') is-invalid @enderror" name="hpaket" id="hpaket"
                            placeholder="Harga Paket" required value="{{old('hpaket')}}">
                            @error('hpaket')
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
                    <th scope="col">Nama paket</th>
                    <th scope="col">Harga Paket</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dpak as $item)
                <tr>
                    <th scope="row">#</th>
                    <td>{{$item->NamaPaket}}</td>
                    <td>{{$item->Harga}}</td>
                    
                    <td>
                        <div class="d-flex">
                            <a href="#" class="mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                    class="fa-solid fa-pen"></i></a>
                            <!-- <a href="#" class="ml-2" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                    class="fa-solid fa-trash" style="color: #000;"></i></a> -->
                            <form action="/deletepaket/{{$item->IDPaket}}" method="POST">
                                @csrf
                                @method('DELETE')
                            
                                <input type="submit" value="delete">
                            </form>
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