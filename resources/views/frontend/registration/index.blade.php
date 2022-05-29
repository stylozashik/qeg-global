@extends('backend.default.layouts.authentication.master')

@section('title', 'Default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="text-center fs-1">QEG Registration</h1>
                    <p class="text-center fs-1s">Ready to get started with ApplyBoard?
                    <br>Register today to find out how we can support you.</p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div class="card">
                                <div class="card-header pb-4">
                                    <img src="{{asset('/assets/images/register/Student.webp')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="fs-4 font-weight-bold mb-3">Students</h5>
                                    <P class="mb-4">Are you a student looking to study abroad in Canada, the United States, the United Kingdom, or Australia? Register to let our team of experts guide you through your journey.</P>
                                    <a class="btn btn-primary btn-lg" href="{{route('student')}}">Student Registration</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="card">
                                <div class="card-header pb-4">
                                    <img src="{{asset('/assets/images/register/School.webp')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="fs-4 font-weight-bold mb-3">Partner Schools</h5>
                                    <P class="mb-4">Become an ApplyBoard partner school to diversify your campus by attracting qualified students from around the world. Complete this form and our Partner Relations team will be in touch. </P>
                                    <a class="btn btn-primary btn-lg" href="{{ route('school') }}">Partner Inquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="card">
                                <div class="card-header pb-4">
                                    <img src="{{asset('/assets/images/register/RP.webp')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="fs-4 font-weight-bold mb-3">Recruitment Partners</h5>
                                    <P class="mb-4">Do you recruit prospective students who want to study in Canada, the United States, the United Kingdom, or Australia? Register to become an ApplyBoard Certified Recruitment Partner. </P>
                                    <a class="btn btn-primary btn-lg" href="{{route('reqruitment-partner')}}">Recruit Registration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </div>
@endsection