<!DOCTYPE html>
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
        <h1 class="text-center">Ini adalah, {{$title}}</h1>
        <form action="/register" method="post">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="namalengkap">FULLNAME</label>
                        <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" id="namalengkap" required value="{{old('namalengkap')}}">
                        @error('namalengkap')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <!-- <div class="col-md-5">
                    <div class="form-floating">
                        <label for="gender">GENDER</label>
                        <input type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender" required value="{{old('gender')}}">
                        @error('gender')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div> -->
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="gender">GENDER</label>
                        <!-- <input type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender" required value="{{old('gender')}}"> -->
                        <div class="input-group">
                            <select class="custom-select @error('gender') is-invalid @enderror" name="gender" id="gender">
                                <option selected>Choose your gender</option>
                                <option value="L">Male</option>
                                <option value="P">Female</option>
                            </select>
                        </div>
                        @error('gender')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="address">ADDRESS</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" required value="{{old('address')}}">
                        @error('address')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="birthplace">BIRTHPLACE</label>
                        <input type="text" class="form-control @error('birthplace') is-invalid @enderror" name="birthplace" id="birthplace" required value="{{old('birthplace')}}">
                        @error('birthplace')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="birthdate">BIRTHDATE</label>
                        <input type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" id="birthdate" required value="{{old('birthdate')}}">
                        @error('birthdate')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="phonenumber">PHONE NUMBER</label>
                        <input type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" id="phonenumber" required value="{{old('phonenumber')}}">
                        @error('phonenumber')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="email">EMAIL</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="arrivaldate">ARRIVAL DATE</label>
                        <input type="text" class="form-control @error('arrivaldate') is-invalid @enderror" name="arrivaldate" id="arrivaldate" required value="{{old('arrivaldate')}}">
                        @error('arrivaldate')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="package">PACKAGE</label>
                        <input type="text" class="form-control @error('package') is-invalid @enderror" name="package" id="package" required value="{{old('package')}}">
                        @error('package')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="programduration">PROGRAM DURATION</label>
                        <input type="text" class="form-control @error('programduration') is-invalid @enderror" name="programduration" id="programduration" required value="{{old('programduration')}}">
                        @error('programduration')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="username">USERNAME</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" required value="{{old('username')}}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="password">PASSWORD</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required value="{{old('password')}}">
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-5">
                    <div class="form-floating">
                        <label for="password-confirm">RE-ENTER PASSWORD</label>
                        <input id="password-confirm" type="text" class="form-control @error('password-confirm') is-invalid @enderror" name="password-confirm" required value="{{old('password-confirm')}}">
                        @error('password-confirm')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Sign up</button>
                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2022-2023</p>
                </div>
            </div>
        </form>
    </div>

     <!-- Js & other assets -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="/assets/js/jquery.slim.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bootstrap-datepicker.min.js"></script>
    <script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <!-- datepicker -->
    <!-- <script type="text/javascript">
        $(document).ready(function () {
            $('#datepicker').datepicker();
        });
    </script> -->
    
</body>
</html>