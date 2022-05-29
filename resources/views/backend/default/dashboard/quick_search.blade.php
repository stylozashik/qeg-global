@extends('backend.default.layouts.simple.master')

@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Search Programs & Schools</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('/') }}"><i data-feather="home"></i></a></li>
<li class="breadcrumb-item"><a href="{{ route('/') }}">Dashboard</a></li>
<li class="breadcrumb-item active"><a href="{{ route('quick_search') }}">  Search Programs & Schools</a></li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-sm-12 col-xl-12">
			<div class="card height-equal" style="min-height: 331.766px;">
				<div class="card-header">
					{!! Form::open(['route'=>'index']) !!}
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="row">
                                    <div class="input-group input-group-lg">
                                        {!! Form::text('subject', null, ['class'=>'form-control w-25', 'placeholder' => 'What would you like to study?']) !!}
                                        {!! Form::text('subject', null, ['class'=>'form-control w-50','placeholder' => 'Where? e.g school name or location']) !!}
                                        {!! Form::submit('Search', ['class'=>'form-control btn-primary']) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        
                                    </div>
                                    <div class="col-sm-4 mr-0">
                                        
                                    </div>
                                    <div class="col-sm-2">
                                       
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>
                    {!! Form::close() !!}
				</div>
				<div class="card-body">
					<div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header py-3 px-4">
                      <h5>Eligibility</h5>
                    </div>
                    <div class="card-body row switch-showcase px-0">
                      <div class="col-sm-12">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group pb-3">
                                {!! Form::label('in_country', 'Prefer Country', ['class'=>'col-form-label pt-0']) !!}
                                {!! Form::select('country', [''=>'Select Country', 'BD'=>'Bangladesh'], null, ['id'=>'country', 'class'=>'form-control']) !!}
                              </div>
                            </div>
                            <div class="col-sm-12 pt-2">
                              <div class="form-group pb-3">
                                {!! Form::label('in_state', 'Prefered State/City', ['class'=>'col-form-label pt-0']) !!}
                                {!! Form::select('state', [''=>'Select State/City', 'BD'=>'Dhaka'], null, ['id'=>'in_state', 'class'=>'form-control']) !!}
                              </div>
                            </div>
                            <div class="col-sm-12 pt-2">
                              <div class="form-group pb-3">
                                {!! Form::label('in_state', 'Prefered School Type', ['class'=>'col-form-label pt-0']) !!}
                                <div class="row px-2">
                                  <div class="col-sm-6 checkbox checkbox-dark mb-0 border bg-light text-dark">
                                    {!! Form::checkbox('Diploma', '', null, ['class'=>'form-check-input','id'=>'diploma','type'=>'checkbox']) !!}
                                    {!! Form::label('diploma', 'Diploma', ['col-form-label pt-0 float-end']) !!}
                                  </div>
                                  <div class="col-sm-6 checkbox checkbox-dark mb-0 border bg-light text-dark">
                                    {!! Form::checkbox('college', '', null, ['class'=>'form-check-input','id'=>'college','type'=>'checkbox']) !!}
                                    {!! Form::label('college', 'College', ['col-form-label pt-0']) !!}
                                  </div>
                                  <div class="col-sm-6 checkbox checkbox-dark mb-0 border bg-light text-dark">
                                    {!! Form::checkbox('graduation', '', null, ['class'=>'form-check-input','id'=>'graduation','type'=>'checkbox']) !!}
                                    {!! Form::label('graduation', 'Graduation', ['col-form-label pt-0']) !!}
                                  </div>
                                  <div class="col-sm-6 checkbox checkbox-dark mb-0 border bg-light text-dark">
                                    {!! Form::checkbox('post-graduate', '', null, ['class'=>'form-check-input','id'=>'post-graduate','type'=>'checkbox']) !!}
                                    {!! Form::label('post-graduate', 'Post Graduate', ['col-form-label pt-0']) !!}
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group pb-3">
                                {!! Form::label('in-level', 'Prefered Level', ['class'=>'col-form-label pt-0']) !!}
                                {!! Form::select('level', [''=>'Select Level', '1'=>'1', '2'=>'2'], null, ['id'=>'in-level', 'class'=>'form-control']) !!}
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group pb-3">
                                {!! Form::label('in-intake', 'Prefered Intake', ['class'=>'col-form-label pt-0']) !!}
                                {!! Form::select('intake', [''=>'Select Intake', 'BD'=>'sep 2022'], null, ['id'=>'in-intake', 'class'=>'form-control']) !!}
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group pb-3">
                                <label for="customRange1" class="form-label">Application Fee</label>
                                <input type="range" class="form-range" id="customRange1">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group pb-3">
                                <label for="customRange1" class="form-label">Tution Fee</label>
                                <input type="range" class="form-range" id="customRange1">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <button disabled="disabled" class="btn btn-primary btn-sm btn-dark text-white d-block">Clear Filter</button>
                            </div>
                            <div class="col-sm-6">
                              {!! Form::submit('Apply Filter', ['class'=>'btn btn-primary btn-sm btn-dark text-white float-end']) !!}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-body">
                      <ul class="nav nav-tabs nav-left" id="left-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="right-home-tab" data-bs-toggle="tab" href="#right-home" role="tab" aria-controls="right-home" aria-selected="true" data-bs-original-title="" title=""><i class="icofont icofont-ui-home"></i>Programs</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-right-tab" data-bs-toggle="tab" href="#right-profile" role="tab" aria-controls="profile-icon" aria-selected="false" data-bs-original-title="" title=""><i class="icofont icofont-man-in-glasses"></i>Schools</a></li>
                      </ul>
                      <div class="tab-content" id="right-tabContent">
                        <div class="tab-pane fade active show" id="right-home" role="tabpanel" aria-labelledby="right-home-tab">
                          <p class="mb-0 m-t-30">Changed</p>
                        </div>
                        <div class="tab-pane fade" id="right-profile" role="tabpanel" aria-labelledby="profile-right-tab">
                          @include('backend.default.dashboard.schools.all_school')
                        </div>
                        <div class="tab-pane fade" id="right-contact" role="tabpanel" aria-labelledby="contact-right-tab">
                          <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
				</div>
			</div>
		</div>
    </div>
</div>
<script type="text/javascript">
	var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('assets/js/notify/index.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
@endsection
