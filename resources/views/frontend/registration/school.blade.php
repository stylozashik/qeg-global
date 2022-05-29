
@extends('backend.default.layouts.authentication.master')

@section('title', 'Default')

@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="login-main w-100"> 
                            {{ Form::open(['route' => ['school', 'ljhkjh'], 'method' => 'DELETE', 'class' => 'theme-form']) }}
                                
                                <div class="form-group">
                                    <h1 class="text-center">Partnership Request</h1>
                                    <p class="text-center">Complete the form below and our Partner Relations Team will be in touch soon.</p>    
                                </div>
                                <div class="form-group">
                                    {{ Form::label('country', 'Destination Country', ['class' => 'col-form-label required'])}}
                                    {{ Form::select('country', [1 => 'Bangladesh', 0 => 'USA', 2 => 'Other'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Select an Option', 'required']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('school', 'School Name', ['class' => 'col-form-label required'])}}
                                    {{ Form::textarea('school', null, ['id' => 'keterangan', 'rows' => 3, 'class' => 'form-control','required']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('firstName', 'Contact Name', ['class' => 'col-form-label col-form-label pt-0 required'])}}
                                    <div class="row g-2">
                                        <div class="col-6">
                                            {{ Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'Contact First Name', 'required']) }}
                                        </div>
                                        <div class="col-6">
                                            {{ Form::text('lasttName', null, ['class' => 'form-control', 'placeholder' => 'Contact Last Name', 'required']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', 'Contact Email', ['class' => 'col-form-label required'])}}
                                    {{ Form::email('email',null, ['class' => 'form-control form-control-sm', 'required']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('phone', 'Phone Number', ['class' => 'col-form-label'])}}
                                    {{ Form::text('phone',null, ['class' => 'form-control form-control-sm']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('cobtact_title', 'Contact Title', ['class' => 'col-form-label required'])}}
                                    {{ Form::text('cobtact_title', null, ['class' => 'form-control form-control-sm', 'required']) }}
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox" data-toggle="collapse" data-target="#referred" aria-expanded="false">
                                    <label class="text-muted" for="checkbox1">Check if you have been reffered by someone in Queens Education Group</label>
                                    </div>
                                </div>
                                <div id="referred" class="referred">
                                    <div class="form-group">
                                        {!! Form::label('reffered_name', 'Referred by Full Name', ['class' => 'col-form-label']) !!}
                                        {!! Form::text('referred_name', null, ['class' => 'form-control form-control-sm']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('reffered_email', 'Referred by email', ['class' => 'col-form-label']) !!}
                                        {!! Form::email('reffered_email', null, ['class' => 'form-control form-control-sm']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('comments', 'Any additional comments:', ['class' => 'col-form-label required'])}}
                                    {{ Form::textarea('comments', null, ['rows' => 3, 'class' => 'form-control form-control-sm','required']) }}
                                </div>
                               {{--  <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                                    <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div> --}}
                                <p class="mb-0 mt-1">ApplyBoard is committed to protecting and respecting your privacy, and we’ll only use your personal information to administer your account and to provide the products and services you requested from us. From time to time, we would like to contact you about our products and services, as well as other content that may be of interest to you. If you consent to us contacting you for this purpose, please tick below to say how you would like us to contact you:</p>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Check if you have been reffered by someone in Queens Education Group</label>
                                    </div>
                                </div>

                                <p>You can unsubscribe from these communications at any time. For more information on how to unsubscribe, our privacy practices, and how we are committed to protecting and respecting your privacy, please review our Privacy Policy.</p>

                                <p>By clicking submit below, you consent to allow ApplyBoard to store and process the personal information submitted above to provide you the content requested.</p>
                                <h6 class="text-muted mt-4 or">Or signup with</h6>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Check if you have been reffered by someone in Queens Education Group</label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                                </div>
                                <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="login.html">Sign in</a></p>
                            {{ Form::close() }}
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