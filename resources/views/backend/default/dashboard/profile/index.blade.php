@extends('backend.default.layouts.simple.master')
@section('title', 'Step Form Wizard')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Step Form Wizard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Form Layout</li>
<li class="breadcrumb-item">Step Form Wizard/li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card bg-light text-dark">
				<div class="card-body">
					<div class="stepwizard">
						<div class="stepwizard-row setup-panel">
							<div class="stepwizard-step">
								<a class="btn btn-primary" href="#step-1">1</a>
								<p>General Information</p>
							</div>
							<div class="stepwizard-step">
								<a class="btn btn-light" href="#step-2">2</a>
								<p>Education History</p>
							</div>
							<div class="stepwizard-step">
								<a class="btn btn-light" href="#step-3">3</a>
								<p>Test Scores</p>
							</div>
							<div class="stepwizard-step">
								<a class="btn btn-light" href="#step-4">4</a>
								<p>Background Information</p>
							</div>
							<div class="stepwizard-step">
								<a class="btn btn-light" href="#step-4">4</a>
								<p>Upload Documents</p>
							</div>
						</div>
					</div>
                    {!! Form::open(['route'=>'index']) !!}
						<div class="setup-content" id="step-1">
							<div class="col-xs-12">
								<div class="col-md-12">
                                    <h3>Registration Date: April 17th, 2022</h3>
                                    <div class="card">
                                        <div class="card-body">
											<h4>Personal Information</h4>
											<p>(As indicated on your passport)</p>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('first_name', 'First Name', ['class'=>'control-label required']) !!}
                                                        {!! Form::text('first_name', '', ['id'=>'first_name','class'=>'form-control', 'placeholder'=>'Johan', 'required'=>'required']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('middle_name', 'Middle Name', ['class'=>'control-label']) !!}
                                                        {!! Form::text('middle_name', '', ['id'=>'middle_name','class'=>'form-control', 'placeholder'=>'Johan']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('last_name', 'Last Name', ['class'=>'control-label required']) !!}
                                                        {!! Form::text('last_name', '', ['id'=>'last_name','class'=>'form-control', 'placeholder'=>'Johan', 'required'=>'required']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('date_of_birth', 'Date of Birth', ['class'=>'control-label required']) !!}
                                                        {{ Form::date('date_of_birth', null, ['class' => 'form-control', 'placeholder' => 'Last part of student name', 'required']) }}
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('first_language', 'First Language', ['class'=>'control-label required']) !!}
                                                        {!! Form::text('first_language', '', ['id'=>'first_language','class'=>'form-control', 'type'=>'text', 'placeholder'=>'', 'required'=>'required']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('citizenship', 'Country of Citizenship', ['class'=>'control-label required']) !!}
                                                       {!! Form::select('citizenship', ['bd'=>'Bangladesh', 'usa'=>'United Sates'], null, ['id'=>'citizenship','class'=>'form-control', 'required'=>'required']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('passport', 'Passport Number', ['class'=>'control-label required']) !!}
                                                       {!! Form::select('passport', ['bd'=>'Bangladesh', 'usa'=>'United Sates'], null, ['id'=>'passport','class'=>'form-control', 'required'=>'required']) !!}
                                                    </div>
                                                </div>
												<div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('passport_expiry', 'Passport Expiry Date', ['class'=>'control-label required']) !!}
                                                        {{ Form::date('passport_expiry', null, ['class' => 'form-control', 'required']) }}
                                                    </div>
                                                </div>
												
												<div class="col-md-2">
                                                    <div class="mb-3">
                                                        {!! Form::label('m_stat', 'Maritial Status', ['class'=>'control-label required d-block']) !!}
                                                        {!! Form::radio('maritial_status', 'single', null, ['id'=>'m_stat','class'=>'form-check-input']) !!}
														{!! Form::label('m_stat', 'Single', ['class'=>'control-label required']) !!}
                                                        {!! Form::radio('maritial_status', 'single', null, ['id'=>'m_stat','class'=>'form-check-input']) !!}
														{!! Form::label('m_stat', 'Married', ['class'=>'control-label required']) !!}
                                                    </div>
                                                </div>
												<div class="col-md-2">
                                                    <div class="mb-3">
                                                        {!! Form::label('m_stat', 'Gender', ['class'=>'control-label required d-block']) !!}
                                                        {!! Form::radio('gender', '2', null, ['id'=>'gender1','class'=>'form-check-input']) !!}
														{!! Form::label('gender1', 'Female', ['class'=>'control-label required']) !!}
                                                        {!! Form::radio('gender', '1', null, ['id'=>'gender2','class'=>'form-check-input']) !!}
														{!! Form::label('gender2', 'Male', ['class'=>'control-label required']) !!}
                                                    </div>
                                                </div>
                                            </div>
											<h3>Address Detail</h3>
											<div class="row">
												<div class="col-md-8">
                                                    <div class="mb-3">
                                                        {!! Form::label('addr', 'Address', ['class'=>'control-label required']) !!}
                                                        {!! Form::text('address', '', ['id'=>'addr','class'=>'form-control', 'placeholder'=>'Johan', 'required'=>'required']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        {!! Form::label('city_1', 'City/Town', ['class'=>'control-label']) !!}
                                                        {!! Form::text('city', '', ['id'=>'city_1','class'=>'form-control', 'placeholder'=>'Dhaka']) !!}
                                                    </div>
                                                </div>
												<div class="col-md-4">
                                                    <div class="mb-3">
                                                    	{!! Form::label('cntry', 'Country', ['class'=>'control-label required']) !!}
														{!! Form::select('country', ['bd'=>'Bangladesh', 'usa'=>'United Sates'], null, ['id'=>'cntry','class'=>'form-control', 'required'=>'required']) !!}
                                                    </div>
                                                </div>
												<div class="col-md-4">
                                                    <div class="mb-3">
                                                    	{!! Form::label('stte', 'Province/State', ['class'=>'control-label required']) !!}
														{!! Form::text('state', '', ['id'=>'stte','class'=>'form-control', 'placeholder'=>'Dhaka']) !!}
                                                    </div>
                                                </div>
												<div class="col-md-4">
                                                    <div class="mb-3">
                                                    	{!! Form::label('ziper', 'Postal/Zip Code', ['class'=>'control-label required']) !!}
														{!! Form::text('zip', '', ['id'=>'ziper','class'=>'form-control', 'placeholder'=>'1230']) !!}
                                                    </div>
                                                </div>
												<div class="col-md-4">
                                                    <div class="mb-3">
                                                    	{!! Form::label('em', 'Email', ['class'=>'control-label required']) !!}
														{!! Form::text('email', '', ['id'=>'em','class'=>'form-control', 'placeholder'=>'']) !!}
                                                    </div>
                                                </div>
												<div class="col-md-4">
                                                    <div class="mb-3">
                                                    	{!! Form::label('ph', 'Phone', ['class'=>'control-label required']) !!}
														{!! Form::text('phone', '', ['id'=>'ph','class'=>'form-control', 'placeholder'=>'+880']) !!}
                                                    </div>
                                                </div>
											</div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
						<div class="setup-content" id="step-2">
							<div class="col-xs-12">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="control-label">Email</label>
										<input class="form-control" type="text" placeholder="name@example.com" required="required">
									</div>
									<div class="mb-3">
										<label class="control-label">Password</label>
										<input class="form-control" type="password" placeholder="Password" required="required">
									</div>
									<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
								</div>
							</div>
						</div>
						<div class="setup-content" id="step-3">
							<div class="col-xs-12">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="control-label">Birth date</label>
										<input class="form-control" type="date" required="required">
									</div>
									<div class="mb-3">
										<label class="control-label">Have Passport</label>
										<input class="form-control" type="text" placeholder="yes/No" required="required">
									</div>
									<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
								</div>
							</div>
						</div>
						<div class="setup-content" id="step-4">
							<div class="col-xs-12">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="control-label">State</label>
										<input class="form-control mt-1" type="text" placeholder="State" required="required">
									</div>
									<div class="mb-3">
										<label class="control-label">City</label>
										<input class="form-control mt-1" type="text" placeholder="City" required="required">
									</div>
									<button class="btn btn-success pull-right" type="submit">Finish!</button>
								</div>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/form-wizard/form-wizard-two.js')}}"></script>
@endsection