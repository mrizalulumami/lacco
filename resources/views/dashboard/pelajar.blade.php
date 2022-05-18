@extends('layouts.app')

@section('content')

    <div class="container mt-5">
    <h1>{{$title}}</h1>
        <form>
            
            <div class="row">
                
                <div class="col-md-6">
                    <form>
                        <h4>Mungkin Login ?</h4>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <h4>Mungkin Login ?</h4>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                    </form>
                </div>
            </div>
            <!-- ssss -->
            <div class="row">
                <div class="col">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Example input placeholder">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Another label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pelajar</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Nama Program</th>
                    <th scope="col">Nama Camp</th>
                    <th scope="col">Nama Tutor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pelajars as $item)
                <tr>
                    <th scope="row">#</th>
                    <td>{{$item->namapelajar}}</td>
                    <td>{{$item->namapaket}}</td>
                    <td>{{$item->namaprogram}}</td>
                    <td>{{$item->namacamp}}</td>
                    <td>{{$item->namatutor}}</td>
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