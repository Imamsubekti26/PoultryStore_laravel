@extends('layout.base')
@section('extended')
  <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
          @include('layout.sidebar')
        <!-- / Menu -->
        
        <!-- Layout container -->
        <div class="layout-page">
          
          <!-- Navbar -->
            @include('layout.navbar')
          <!-- / Navbar -->
          
          <!--- Content Wrapper -->
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              @yield('content')
            </div>
          </div>
          <!--- / Content Wrapper -->
          
        </div>
        <!-- / Layout container -->

      </div>
    </div>
  <!-- Layout wrapper -->
@endsection

@section('custom-script')
@parent
<script src="{{ url('../assets/js/custom.js') }}"></script>
@endsection