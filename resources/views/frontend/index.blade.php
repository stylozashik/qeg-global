@extends('backend.default.layouts.authentication.master')

@section('title', 'Default')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{asset('/assets/images/login/2.jpg')}}" alt="looginpage"></div>
      <div class="col-xl-5 p-0">
        <div class="login-card">
          <div>
            <div><a class="logo text-center" href="index.html"><img class="img-fluid for-light text-center" style="width: 40%;" src="{{asset('/assets/images/Panel_logo.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('/assets/images/Panel_logo.png')}}" alt="looginpage"></a></div>
            <div class="login-main"> 
              <form class="theme-form">
                <h4>Log In</h4>
                {{-- <p>Enter your email & password to login</p> --}}
                <div class="form-group">
                  <label class="col-form-label">Email</label>
                  <input class="form-control" type="email" required="" placeholder="">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="login[password]" required="" placeholder="">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Forgot password</label>
                  </div>
                  <button class="btn btn-primary btn-block btn-lg w-100" type="submit">Log In</button>
                </div>
                <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                <div class="social mt-4">
                  <div class="btn-showcase"><a class="btn btn-outline-light btn-lg" href="https://www.linkedin.com/login" target="_blank"><i class="fa fa-google" data-feather="google"></i> Google </a><a class="btn btn-outline-light btn-lg" href="https://twitter.com/login?lang=en" target="_blank"><i class="fa fa-apple" data-feather="apple"></i>Apple</a><a class="btn btn-outline-light btn-lg" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" data-feather="facebook"></i>Facebook</a></div>
                </div>
                <p class="mt-4 mb-0"><a class="ms-2 text-dark" href="sign-up.html">Forgot password?</a> <br><a class="ms-2 text-dark" href="sign-up.html">Unblock account?</a></p>

                <p class="mt-4 mb-0 ms-2"><span class="text-large fs-4 text-dark">Don't have account?</span> <br><a class="fs-6" href="sign-up.html">Register as a Student</a> <br><a class="fs-6" href="sign-up.html">Register as a Recruitment Partner</a></p>
                <p class="mt-4 mb-0 ms-2"><a class="" href="sign-up.html">Privacy & Cookies Policy</a> <br><a class="" href="sign-up.html">Terms & Condition</a></p>

              </form>
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