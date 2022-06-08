@extends('layouts.app')

@section('content')

    <div class="container mt-5">
    <h1>{{$title}}</h1>
    <h4>Isi form di bawah untuk menambah data ruangan</h4>
        <form method="post" action="/simpanruangan">
            @csrf
            <div class="row">
                <div class="col-md-6">
                        <label for="namaruangan"><b>Nama ruangan</b></label>
                        <div class="form-group">
                            <input type="text" class="form-control @error('namaruangan') is-invalid @enderror" name="namaruangan" id="namaruangan"
                            placeholder="Nama Ruangan" required value="{{old('namaruangan')}}">
                            @error('namaruangan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <label for="camplokasi"><b>Camp dan Lokasi</b></label>
                        <div class="input-group">
                            <select class="custom-select" id="camplokasi" name="camplokasi">
                                @foreach($druangan as $item)
                                <option value="{{ $item->IDCamp }}">{{ $item->NamaCamp }} - {{ $item->Lokasi }}</option>
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
                    <th scope="col">Nama Ruangan</th>
                    <th scope="col">Nama Camp</th>
                    <th scope="col">Nama Lokasi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($ruangans as $item)
                <tr>
                    <th scope="row">#</th>
                    <td>{{$item->namaruangan}}</td>
                    <td>{{$item->namacamp}}</td>
                    <td>{{$item->lokasi}}</td>
                    
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