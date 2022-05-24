@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1>{{$title}}</h1>
    <h4>Isi form di bawah untuk menambah data {{$active}}</h4>
        <form method="post" action="/simpanitempaket">
            @csrf
            <div class="row">
                <div class="col-md-4">
                        <label for="namaitem"><b>Nama Item</b></label>
                        <div class="form-group">
                            <input type="text" class="form-control @error('namaitem') is-invalid @enderror" name="namaitem" id="namaitem"
                            placeholder="Nama item" required value="{{old('namaitem')}}">
                            @error('namaitem')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <label for="idpaket"><b>Paket</b></label>
                        <div class="input-group">
                            <select class="custom-select" id="idpaket" name="idpaket">
                                @foreach($di as $item)
                                <option value="{{ $item->IDPaket }}">{{ $item->NamaPaket }} - {{ $item->Harga }}</option>
                                @endforeach
                            </select>
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
                    <th scope="col">Nama Item</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dis as $item)
                <tr>
                    <th scope="row">#</th>
                    <td>{{$item->NamaItem}}</td>
                    <td>{{$item->NamaPaket}}</td>
                    <td>{{$item->Harga}}</td>
                    
                    <td>
                        <div class="d-flex">
                            <a href="#" class="mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                    class="fa-solid fa-pen"></i></a>
                            <form action="/deleteitempaket/{{$item->IDItemPaket}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <!-- <a href="/deleteitempaket/{{$item->IDItemPaket}}" class="ml-2" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                    class="fa-solid fa-trash" style="color: #000;"></i></a> -->
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