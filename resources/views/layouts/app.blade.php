@include('layouts.header')

<style>
    @media (max-width:992px) {
      .create-group-div{
      width: 60%;
    }
    }
    @media (max-width:767px) {
      .create-group-div{
      width: 80%;
    }
    }
    @media (max-width:550px) {
      .create-group-div{
      width: 95%;
    }
    }
  </style>
    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->


@include('layouts.footer')