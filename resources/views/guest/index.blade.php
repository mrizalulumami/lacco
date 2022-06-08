@extends('layouts.guest')
@section('content')
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container mt-2 mb-2">
            <a class="navbar-brand" href="#">
                <img src="/images/lacco-logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="link-a" href="#">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="link-a" href="#program">Program</a>
                    </li>
                    <li class="nav-item active">
                        <a class="link-a" href="#about">About Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="link-a" href="#contact">Contact</a>
                    </li>
                </ul>
                <div>
                    <a href="{{url('/login')}}" type="button" class="btn-land btn-red">Sign in</a>
                    <a href="{{url('/register')}}" type="button" class="btn-land btn-redbor">Register</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- content 1 -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="mt-5">
                    <h1><b>Speak fluent, Build confident.</b></h1>
                    <span style="color:#64748B;">Learn english & others language with us and show your creativity
                        innit!</span>
                </div>
                <div class="mt-2">
                    <a href="pages/auth/register-2.html" type="button" class="btn-land btn-red">Get started</a>
                </div>
            </div>
            <div class="col-md-8">
                <img width="100%" src="/images/item-top.png" alt="">
            </div>
        </div>
    </div>
    <!-- end content 1 -->

    <!-- content 2 -->
    <div class="container">
        <div id="program" class="card">
            <div class="card-body">
                <h3 class="text-center"><b>Programs</b></h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <a href="#" class="decor">
                                <div class="card mx-auto card-red" style="width: 18rem; height: 20rem">
                                    <div class="card-body">
                                        <img src="/images/ico-mor.png" width="50%" alt="">
                                        <h5 class="card-title">Morning Class</h5>
                                        <p style="font-size: 12px" class="card-text">Starting from Monday to Thursday at
                                            their
                                            respective camps. On
                                            Friday morning, the class was held outdoors with all Alfalfa members. This
                                            activity
                                            is filled with morning exercise, English conversation, closing meeting and
                                            other
                                            exciting activities.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="#" class="decor">
                                <div class="card mx-auto card-red" style="width: 18rem; height: 20rem">
                                    <div class="card-body">
                                        <img src="/images/ico-eve.png" width="50%" alt="">
                                        <h5 class="card-title">Evenign Class</h5>
                                        <p style="font-size: 12px" class="card-text mb-3">The evening class is a
                                            learning
                                            activity in
                                            Alfalfa based on the
                                            ability of each student from their placement test. Consists of 4 class
                                            levels,
                                            namely Beginner, Middle, Pre-advance, and Advance.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="#" class="decor">
                                <div class="card mx-auto card-red" style="width: 18rem; height: 20rem">
                                    <div class="card-body">
                                        <img src="/images/ico-bed.png" width="50%" alt="">
                                        <h5 class="card-title">Bed Time Story</h5>
                                        <p style="font-size: 12px" class="card-text">Additional classes are specially
                                            packaged
                                            to increase confidence as
                                            well as public speaking skills. Students will be taught to dare to tell
                                            stories
                                            and
                                            express imagination, and ideas, in answering English questions.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="#" class="decor">
                                <div class="card mx-auto card-red" style="width: 18rem; height: 20rem">
                                    <div class="card-body">
                                        <img src="/images/ico-afec.png" width="50%" alt="">
                                        <h5 class="card-title">AFEC</h5>
                                        <p style="font-size: 12px" class="card-text">This is a class given to students
                                            during
                                            the first 2 weeks to help increase confidence and accelerate the development
                                            of
                                            vocabulary in English. Students can choose classes according to their wishes
                                            and
                                            abilities.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="#" class="decor">
                                <div class="card mx-auto card-red" style="width: 18rem; height: 20rem">
                                    <div class="card-body">
                                        <img src="/images/ico-thu.png" width="50%" alt="">
                                        <h5 class="card-title">Thursday Edutraining</h5>
                                        <p style="font-size: 12px" class="card-text">The activity on Thursday night is
                                            edutraining which is filled by Mom Indah, and also Alfalfa's tutors. It held
                                            English-language competitions, including impromptu, spelling bees & other
                                            competitions to encourage students to dare to speak in public.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="#" class="decor">
                                <div class="card mx-auto card-red" style="width: 18rem; height: 20rem">
                                    <div class="card-body">
                                        <img src="/images/ico-pus.png" width="50%" alt="">
                                        <h5 class="card-title">Public Speaking Show</h5>
                                        <p style="font-size: 12px" class="card-text">A special night on Friday night for
                                            Alfalfa
                                            members. Each camp will send representatives to show their best performance
                                            in
                                            making English speeches in public and witnessed by all Alfalfa students,
                                            tutors,
                                            and
                                            directly evaluated by Mom Indah.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end contend 2 -->
    <!-- content 3-->
    <div class="container mt-5">
        <div id="facilities" class="text-center">
            <h4><b>Facilities</b></h4>
            <span style="color: #64748B;">Here are the facilities we provides in each camp.</span>
            <div class="row mt-2">
                <div class="col-md-3 mt-2">
                    <img src="/images/ico/fac-wifi.png" width="50%" alt="">
                    <div class="mt-2">
                        <span style="color: #64748B;">Hotspot Area</span>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <img src="/images/ico/fac-lcd.png" width="50%" alt="">
                    <div class="mt-2">
                        <span style="color: #64748B;">LCD for Movies</span>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <img src="/images/ico/fac-cli.png" width="50%" alt="">
                    <div class="mt-2">
                        <span style="color: #64748B;">Counseling clinics</span>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <img src="/images/ico/fac-tut.png" width="50%" alt="">
                    <div class="mt-2">
                        <span style="color: #64748B;">Tutor</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content 3 -->

    <!-- content 4 -->
    <div class="container mt-5">
        <div id="camp" class="text-center">
            <h4><b>Camp</b></h4>
            <span style="color: #64748B;">Choose your camp and check in to keep it before learning.</span>
        </div>
        <div class="row mt-2">
            <div class="col-md-6 mt-2">
                <div class="card">
                    <img src="/images/afla-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Camp 1</b></h5>
                        <div class="d-flex">
                            <span class="mr-5"><i class="fa-solid fa-users" style="color:#FCA5A5;"></i> Remaining
                                capacity : 0</span>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="#">
                                    <div class="button-hell text-center">
                                        Check in
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <!-- <a href="#">
                                    <div class="button-hellis text-center">
                                        Check in
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card">
                    <img src="/images/alfa-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Camp 2</b></h5>
                        <div class="d-flex">
                            <span class="mr-5"><i class="fa-solid fa-users" style="color:#FCA5A5;"></i> Remaining
                                capacity : 10</span>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="#">
                                    <div class="button-hell text-center">
                                        Check in
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <!-- <a href="#">
                                    <div class="button-hellis text-center">
                                        Check in
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card">
                    <img src="/images/alfa-3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Camp 3</b></h5>
                        <div class="d-flex">
                            <span class="mr-5"><i class="fa-solid fa-users" style="color:#FCA5A5;"></i> Remaining
                                capacity : 15</span>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="#">
                                    <div class="button-hell text-center">
                                        Check in
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <!-- <a href="#">
                                    <div class="button-hellis text-center">
                                        Check in
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card">
                    <img src="/images/alfa-4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Camp 4</b></h5>
                        <div class="d-flex">
                            <span class="mr-5"><i class="fa-solid fa-users" style="color:#FCA5A5;"></i> Remaining
                                capacity : 24</span>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="#">
                                    <div class="button-hell text-center">
                                        Check in
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <!-- <a href="#">
                                    <div class="button-hellis text-center">
                                        Check in
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card">
                    <img src="/images/no-img.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Camp 5</b></h5>
                        <div class="d-flex">
                            <span class="mr-5"><i class="fa-solid fa-users" style="color:#FCA5A5;"></i> Remaining
                                capacity : 0</span>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="#">
                                    <div class="button-hell text-center">
                                        Check in
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <!-- <a href="#">
                                    <div class="button-hellis text-center">
                                        Check in
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card">
                    <img src="/images/alfa-6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Camp 6</b></h5>
                        <div class="d-flex">
                            <span class="mr-5"><i class="fa-solid fa-users" style="color:#FCA5A5;"></i> Remaining
                                capacity : 20</span>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="#">
                                    <div class="button-hell text-center">
                                        Check in
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <!-- <a href="#">
                                    <div class="button-hellis text-center">
                                        Check in
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card">
                    <img src="/images/no-img.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Camp 7</b></h5>
                        <div class="d-flex">
                            <span class="mr-5"><i class="fa-solid fa-users" style="color:#FCA5A5;"></i> Remaining
                                capacity : 18</span>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="#">
                                    <div class="button-hell text-center">
                                        Check in
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <!-- <a href="#">
                                    <div class="button-hellis text-center">
                                        Check in
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content 4 -->

    <!-- content 5-->
    <div class="container mt-5">
        <div id="about" class="jumbotron-red">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/item-dwi-2.png" width="100%" alt="">
                </div>
                <div class="col-md-8">
                    <div class="mt-5 text-white">
                        <h4><b>About us</b></h4>
                        <div style="font-size: 15px">
                            <p>English language dormitory located in Kampung English Pare.
                                Established in 2007 and has
                                its
                                address at Jalan Glagah and Flamboyan, Tulungrejo, Pare, Kediri, East Java. Consists of
                                a
                                female
                                dormitory and a male dormitory.</p>
                            <p class="mt-2">Alfalfa is oriented towards the development of
                                communication science. All
                                new
                                members are
                                facilitated by regular classes, namely the AFEC (Alfalfa Fun Engish Class) class to
                                improve
                                speaking skills and are adjusted to the level/ability of each member which lasts 2 weeks
                                and
                                is
                                guided by well-experienced tutors. the members will learn in a class that is conducive,
                                comfortable and fun. The members are also trained to be good at processing emotional
                                skills
                                and
                                personal intelligence. Alfalfa teaches members to enjoy the learning process and focus
                                on
                                goals
                                in English, therefore Alfalfa as a house of inspiration not only produces
                                foreign-speaking
                                generations but also generations who dare to dream. Alfalfa was born for a generation of
                                Indonesians who are intelligent in language, brave and character.</p>
                            <p class="mt-2 mb-0"><b>Indah Dwi Wahyuni, CC</b></p>
                            <p class="mt-1">Founder & CEO Alfalfa</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end content 5 -->

    <!-- content 6 -->
    <div class="container">
        <div id="contact" class="jumbotron-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <div class="mt-5 ml-auto">
                                <h3><b>Contact</b></h3>
                                <div class="d-flex">
                                    <img class="mr-2" src="/images/ico/phone.png" width="50px" alt="">
                                    <div style="color: #64748B;">
                                        <p class="m-0">+62857 4920 3036 (Whatsapp)</p>
                                        <p class="m-0">+62813 3398 5740 (Call-only)</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-3">
                                    <img class="mr-2" src="/images/ico/location.png" width="50px" alt="">
                                    <div style="color: #64748B; font-size: 15px;">
                                        <p class="m-0">Jl. Glagah No.4, Mulyosari, Tulungrejo, Kec. Pare, Kediri, Jawa
                                            Timur 64212</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-3">
                                    <img class="mr-2" src="/images/ico/time.png" width="50px" alt="">
                                    <div style="color: #64748B;">
                                        <p class="mt-2 mb-2">Monday - Friday; 07.00-16.00 WIB</p>

                                    </div>
                                </div>
                                <div class="d-flex mt-3">
                                    <img class="mr-2" src="/images/ico/mail.png" width="50px" alt="">
                                    <div style="color: #64748B;">
                                        <p class="mt-2 mb-2">alfalfaenglish@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div>
                                <img class="mx-5" src="/images/item-cew.png" width="70%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content 6 -->

    <!-- footer -->
    <div class="jumbotron-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="text-white mt-2"><b>Navigation</b></h5>
                                <div class="mt-2"><a class="noel" href="#">Home</a></div>
                                <div class="mt-2"><a class="noel" href="#">Programs</a></div>
                                <div class="mt-2"><a class="noel" href="#">About us</a></div>
                                <div class="mt-2"><a class="noel" href="#">Contact</a></div>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-white mt-2"><b>Authentication</b></h5>
                                <div class="mt-2"><a class="noel" href="#">Sign in</a></div>
                                <div class="mt-2"><a class="noel" href="#">Register</a></div>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-white mt-2"><b>Regulation</b></h5>
                                <div class="mt-2"><a class="noel" href="#">Terms & condition</a></div>
                                <div class="mt-2"><a class="noel" href="#">Privacy & policy</a></div>
                                <div class="mt-2"><a class="noel" href="#">FAQ</a></div>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-white mt-2"><b>Social Media</b></h5>
                                <div class="mt-2"><a class="noel" href="#"><i class="fa-brands fa-facebook"></i>
                                        Facebook</a></div>
                                <div class="mt-2"><a class="noel" href="#"><i class="fa-brands fa-instagram"></i>
                                        Instagram</a></div>
                                <div class="mt-2"><a class="noel" href="#"><i class="fa-brands fa-youtube"></i>
                                        Youtube</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <div class="ml-auto">
                            <button onclick="topFunction()" id="Top" type="button" class="btn btn-danger"><i
                                    class="fa-solid fa-arrow-up"></i></button>
                        </div>
                    </div>
                    <div class="d-flex mt-5">
                        <img class="ml-auto" src="/images/alfa-white.png" width="30%" alt="">
                    </div>
                    <!-- <div class="d-flex">
                        <span class="ml-auto noel" style="font-size: 12px">Lacco (Learning Camp Course)</span>
                    </div> -->
                </div>
            </div>
            <div class="border-bottom mt-3"></div>
            <div class="d-flex">
                <div class="mx-auto mt-2 mb-0">
                    <span class="noel" style="font-size: 12px">Copyright© Lacco 2022 • All Rights Reserved • Powered by
                        Alfalfa </span>
                </div>
                <!-- <div class="ml-auto">
                    <img class="mt-3" src="assets/images/fot-alfa.png" width="70%" alt="">
                </div> -->
            </div>
        </div>
    </div>
@endsection