@extends('layouts.auth')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 reg-hide">
                <img src="/images/reg-cove.png" width="100%" height="100%" alt="">
            </div>
            <div class="mx-auto col-md-7">
                <div class="card">
                    <div class="card-body">
                        <a href="{{url('/')}}">
                            <img class="mr-auto ml-2" src="/images/lacco-logo.png" width="120px" alt="">
                        </a>
                        <h2 class="mt-5"><b>Are you new here?</b></h2>
                        <span style="color:#64748B;">Create your account first.</span>

                        <div class="mt-5">

                            <form method="post" action="/simpanruangan">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Full Name</b></label>
                                        <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" name="namalengkap" placeholder="Type your full name here."  required value="{{old('namalengkap')}}">
                                        @error('namalengkap')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label for="gender"><b>Gender</b></label>
                                        <div class="input-group">
                                            <select class="custom-select" id="gender" name="gender">
                                                <option selected>Choose your gender</option>
                                                <option value="L">Male</option>
                                                <option value="P">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Address</b></label>
                                        <input type="text" id="address" name="address" class="form-control  @error('address') is-invalid @enderror" placeholder="Type your address here."  required value="{{old('address')}}">
                                        @error('address')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Birthplace</b></label>
                                        <input type="text" id="birthplace" name="birthplace" class="form-control  @error('birthplace') is-invalid @enderror"
                                            placeholder="Type your birthplace here." required value="{{old('birthplace')}}">
                                        @error('birthplace')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Birthdate</b></label>
                                        <input type="text" id="birthdate" name="birthdate" class="form-control  @error('birthdate') is-invalid @enderror" data-provide="datepicker"
                                            placeholder="Choose your birthdate."  required value="{{old('birthdate')}}">
                                        @error('birthdate')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Phone Number</b></label>
                                        <input type="text" id="phonenumber" name="phonenumber" class="form-control  @error('phonenumber') is-invalid @enderror"
                                            placeholder="Type your birthplace here." required value="{{old('phonenumber')}}">
                                        @error('phonenumber')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>E-mail</b></label>
                                        <input type="text" id="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Type your e-mail here." required value="{{old('email')}}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Arival Date</b></label>
                                        <input type='text' id="arrivaldate" name="arrivaldate" class="form-control  @error('arrivaldate') is-invalid @enderror" data-provide="datepicker"
                                            placeholder="Choose your arival date." required value="{{old('arrivaldate')}}">
                                        @error('arrivaldate')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label for="package"><b>Package</b></label>
                                        <div class="input-group">
                                            <select class="custom-select" id="package" name="package">
                                                <!-- <option selected>Choose your package</option>
                                                <option value="1 month complete pack">1 month complete pack</option>
                                                <option value="2 weeks complete pack">2 weeks complete pack</option>
                                                <option value="Non package">Non package</option> -->
                                                @foreach($pakets as $item)
                                                <option value="{{ $item->IDPaket }}">{{ $item->NamaPaket }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Program Duration</b></label>
                                        <div class="input-group">
                                            <select class="custom-select" id="programduration" name="programduration">
                                                <!-- <option selected>Choose your program duration.</option>
                                                <option value="1 weeks">2 weeks</option>
                                                <option value="2 Month">1 Month</option>
                                                <option value="3 Month">2 Month</option>
                                                <option value="4 Month">3 Month</option>
                                                <option value="5 Month">> 4 Month</option> -->
                                                @foreach($programs as $item)
                                                <option value="{{ $item->IDProgram }}">{{ $item->NamaProgram }}-{{ $item->Durasi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Camp</b></label>
                                        <div class="input-group">
                                            <select class="custom-select" id="camp" name="camp">
                                                @foreach($ruangan as $item)
                                                <option value="{{ $item->IDCamp }}">{{ $item->NamaRuangan}} - {{$item->NamaCamp}}</option>
                                                @endforeach
                                            </select>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Username</b></label>
                                        <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Type your username here." required value="{{old('username')}}">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Password</b></label>
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Type your password here." required value="{{old('password')}}">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <label><b>Re-enter Password</b></label>
                                        <input type="password-confirm" id="password-confirm" name="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror"
                                            placeholder="Type your password here." required value="{{old('password-confirm')}}">
                                        @error('password-confirm')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-xs-12 mt-1">
                                        <div class="mt-2">
                                        <button class="w-100 btn btn-lg button-hell text-center mt-2" type="submit">Sign up</button>
                                            <!-- <a href="/pages/dashboard/dashboard.html">
                                                <div class="button-hell text-center">
                                                    Sign in
                                                </div>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex mt-5">
                            <span>Already have an account?</span>
                            <a class="link-hell ml-1" href="{{url('/login')}}">Sign in here.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
