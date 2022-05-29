@extends('backend.default.layouts.simple.master')
@section('title', 'Ecommerce')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Students</h3>
@endsection

@section('breadcrumb-items')
<a class="btn btn-gradient" data-bs-original-title="" title="">Add Student</a>
@endsection

@section('content')
 {{-- write code here --}}
 <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Actions</th>
      <th scope="col">Student ID</th>
      <th scope="col">Student Email</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Nationality</th>
      <th scope="col">Recruitment Partner</th>
      <th scope="col">Recruitment Type</th>
      <th scope="col">Education</th>
      <th scope="col">Applications</th>
      <th scope="col">Referral Source</th>
      <th scope="col">Lead Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td style="width: 120px;">
        <div class="form-group pb-2">
          {!! Form::input('student_id', '', null, ['id'=>'student_id', 'class'=>'form-control']) !!}
        </div>
      </td>
      <td style="width: 200px;">
        <div class="form-group pb-2">
          {!! Form::input('student_email', '', null, ['id'=>'student_email', 'class'=>'form-control']) !!}
        </div>
      </td>
      <td>
        <div class="form-group pb-2" style="width: 120px;">
          {!! Form::input('first_name', '', null, ['id'=>'first_name', 'class'=>'form-control']) !!}
        </div>
      </td>
      <td>
        <div class="form-group pb-2" style="width: 120px;">
          {!! Form::input('last_name', '', null, ['id'=>'last_name', 'class'=>'form-control']) !!}
        </div>
      </td>
      <td>
        <div class="form-group pb-2">
          {!! Form::input('nationality', '', null, ['id'=>'nationality', 'class'=>'form-control']) !!}
        </div>
      </td>
      <td>
        <div class="form-group pb-2" style="width: 200px;">
          {!! Form::input('recruitment_partner', '', null, ['id'=>'recruitment_partner', 'class'=>'form-control']) !!}
        </div>
      </td>
      <td style="width: 200px;">
        <div class="form-group pb-2">
          {!! Form::select('recruitment_type', [''=>'', '1'=>'Staff', '2'=>'Owner'], null, ['id'=>'recruitment_type', 'class'=>'form-control']) !!}
        </div>
      </td>
      <td style="width: 110px;">
        {!! Form::select('education', [''=>'', '1'=>'Grade 1', '2'=>'Grade 2', '3'=>'Grade 3','4'=>'Grade 4','5'=>'Grade 5',], null, ['id'=>'education', 'class'=>'form-control']) !!}
      </td>
      <td>
        {!! Form::select('applications', [''=>'', '1'=>'Has Application', '2'=>'Has No Application'], null, ['id'=>'applications', 'class'=>'form-control']) !!}
      </td>
      <td style="width: 200px;">
        {!! Form::select('referral_source', [''=>'', '1'=>'Facebook', '2'=>'Instagram', '3'=>'Twitter','4'=>'Youtube','5'=>'Blog',], null, ['id'=>'referral_source', 'class'=>'form-control']) !!}
      </td>
      <td style="width: 150px;">
        {!! Form::select('lead_source', [''=>'', '1'=>'New Lead', '2'=>'Follow Up', '3'=>'Ready To Apply'], null, ['id'=>'referral_source', 'class'=>'form-control']) !!}
      </td>
    </tr>

    @for($i=0; $i<=50; $i++)
      <tr>
        <th scope="row">
          <a href="#"><i class="icon-menu-alt"></i></a>
        </th>
        <td>83599{{ $i }}</td>
        <td>stylozashik@gmail.com</td>
        <td>Ashikur</td>
        <td>Rahaman</td>
        <td>Bangladesh</td>
        <td>admission.uniedu@yahoo.com</td>
        <td>Owner</td>
        <td>Bachelors(Bangladesh)</td>
        <td>
          <span class="badge rounded-pill badge-primary">1</span>
          <span class="badge rounded-pill badge-secondary">2</span>
          <span class="badge rounded-pill badge-success">3</span>
        </td>
        <td>Staff</td>
        <td>New Lead</td>
      </tr>
    @endfor
  </tbody>
</table>
 {{-- Code Ends here --}}
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(
      document.getElementById('map'),
      {center: new google.maps.LatLng(-33.91700, 151.233), zoom: 18});
  
    var iconBase =
      "{{ asset('assets/images/dashboard-2')}}/";
    
    var icons = {
      userbig: {
        icon: iconBase + '1.png'
      },
      library: {
        icon: iconBase + '3.png'
      },
      info: {
        icon: iconBase + '2.png'
      }
    };
  
    var features = [
      {
        position: new google.maps.LatLng(-33.91752, 151.23270),
        type: 'info'
      }, {
        position: new google.maps.LatLng(-33.91700, 151.23280),
        type: 'userbig'
      },  {
        position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
        type: 'library'
      }
    ];
  
    // Create markers.
    for (var i = 0; i < features.length; i++) {
      var marker = new google.maps.Marker({
        position: features[i].position,
        icon: icons[features[i].type].icon,
        map: map
      });
    };
  }
</script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGCQvcXUsXwCdYArPXo72dLZ31WS3WQRw&amp;callback=initMap"></script>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dashboard_2.js')}}"></script>
@endsection

