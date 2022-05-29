
@extends('backend.default.layouts.authentication.master')

@section('title', 'Default')

@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="col-12 p-0">  
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('/assets/images/register/login_image.png')}}" class="w-75 mt-4 text-right" alt="">
                </div>
                <div class="col-md-6">
                <div class="row">
                    <div>
                    {{-- <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div> --}}
                    <div class="login-main col-md-8"> 
                        
                        <form class="theme-form">
                            <div class="card height-equal">
                                <div class="card-header">
                                    <h4>Create your account</h4>
                                    <p>Enter your personal details to create account</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-form-label">Email Address</label>
                                        <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Confirm Password</label>
                                        <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1"> I have read and agree to the <a class="ms-2" href="#">Terms and Conditions</a> and the <a class="ms-2" href="#">Privacy and Cookies Policy*.</a></label>
                                        </div>
                                        <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                                    </div>
                                </div>
                                    <div class="card-footer">
                                        <h6 class="text-muted mt-4 or">Or signup with</h6>
                                    <div class="social mt-4">
                                        <div class="btn-showcase"><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-google txt-google"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>google</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook txt-fb"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>facebook</a></div>
                                    </div>
                                    <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="login.html">Sign in</a></p>
                                </div>
                            </div>
                           
                            
                            
                        </form>
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