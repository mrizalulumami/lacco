<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>{{$title}}</title>
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Ini adalah, {{ $title }}</h1>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if(session()->has('loginError'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
        <form action="/login" method="post">
            @csrf
            <div class="form-floating">
                <label for="Username">USERNAME</label>
                <input type="text" class="form-control @error('Username') is-invalid @enderror" name="Username" id="Username" placeholder="Silahkan masukan username anda" required value="{{old('Username')}}">
                @error('Username')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <label for="Password">PASSWORD</label>
                <input type="Password" class="form-control @error('Password') is-invalid @enderror" name="Password" id="Password" placeholder="Silahkan masukan password anda" required value="{{old('Password')}}">
                @error('Password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2022-2023</p>
        </form>
    </div>
</body>
</html> -->
@extends('layouts.auth')
@section('content')
<div class="d-md-flex half">
        <div class="bg order-1 order-md-2 boncos"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <a href="{{url('/')}}">
                            <img class="mr-auto ml-2" src="/images/lacco-logo.png" width="120px" alt="">
                        </a>
                        <h2 class="mt-5"><b>Welcome Back</b></h2>
                        <span style="color:#64748B;">Enter your username & password first.</span>
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <!-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. -->
                            {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(session()->has('loginError'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <!-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. -->
                            {{session('loginError')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <form class="mt-5" action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Username"><b>Username</b></label>
                                <input type="Username" class="form-control @error('Username') is-invalid @enderror" id="Username" name="Username" placeholder="Silahkan masukan username anda" required value="{{old('Username')}}">
                                @error('Username')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!-- <div class="form-group">
                                <label for="Email"><b>Email</b></label>
                                <input type="Email" class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email" placeholder="Silahkan masukan Email anda" required value="{{old('Email')}}">
                                @error('Email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> -->
                            <div class="form-group">
                                <label for="Password"><b>Password</b></label>
                                <input type="Password" class="form-control @error('Password') is-invalid @enderror" id="Password" name="Password" placeholder="Silahkan masukan password anda" required value="{{old('Username')}}">
                                @error('Password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <div class="d-flex">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    <a class="ml-auto link-hell" href="#">forgot password?</a>
                                </div>
                            </div>
                            <button class="w-100 btn btn-lg button-hell text-center mt-2" type="submit">Sign in</button>
                            <!-- <a>
                                <div class="button-hell text-center" type="submit">
                                    Sign in
                                </div>
                            </a> -->
                        </form>
                        
                        <div class="d-flex mt-5">
                            <span>Don't have account?</span>
                            <a class="link-hell ml-1" href="{{url('/register')}}">Register here.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection