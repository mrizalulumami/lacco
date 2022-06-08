@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
<!-- <main class="app-content"> -->
    <div class="row">
      <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex">
              <div class="dash-ic rounded-circle">
                <i class="icoli fa-solid fa-user-check"></i>
              </div>
              <div class="ml-5">
                <h5 style="color: #64748B;">Verified member</h5>
                <h3>346</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex">
              <div class="dash-ic rounded-circle">
                <i class="icoli fa-solid fa-user-xmark"></i>
              </div>
              <div class="ml-5">
                <h5 style="color: #64748B;">Non-verified member</h5>
                <h3>768</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex">
              <div class="dash-ic rounded-circle">
                <i class="icoli fa-solid fa-users"></i>
              </div>
              <div class="ml-5">
                <h5 style="color: #64748B;">Members total</h5>
                <h3>1482</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex">
              <div class="dash-ic rounded-circle">
                <div class="ml-2">
                  <i class="icoli fa-solid fa-clipboard-list"></i>
                </div>
              </div>
              <div class="ml-5">
                <h5 style="color: #64748B;">Programs</h5>
                <h3>14</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex">
              <div class="dash-ic rounded-circle">
                <div class="ml-2">
                  <i class="icoli fa-solid fa-user-tie"></i>
                </div>
              </div>
              <div class="ml-5">
                <h5 style="color: #64748B;">Tutor</h5>
                <h3>24</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xs-12 mt-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex">
              <div class="dash-ic rounded-circle">
                <i class="icoli fa-solid fa-users"></i>
              </div>
              <div class="ml-5">
                <h5 style="color: #64748B;">Users</h5>
                <h3>1532</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chart -->
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">User Static</h3>
          <div class="embed-responsive embed-responsive-16by9">
            <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">Member Static</h3>
          <div class="embed-responsive embed-responsive-16by9">
            <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
          </div>
        </div>
      </div>
    </div>
  <!-- </main> -->
  @endsection
  