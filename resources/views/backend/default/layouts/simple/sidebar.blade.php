<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="{{route('/')}}"><img class="img-fluid for-light w-50" src="{{asset('assets/images/logo/logo_main.png')}}" alt=""><img class="img-fluid for-dark w-50" src="{{asset('assets/images/logo/logo_main.png')}}" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{ Route::currentRouteName()=='index' ? 'active' : '' }}" href="{{ route('index') }}"><i data-feather="home"></i><span class="lan-3">Dashboard</span>
						</a>
					</li>
					{{-- <li class="sidebar-list"><a class="sidebar-link sidebar-title {{ Route::currentRouteName()=='contacts' ? 'active' : '' }}" href="#"><i class="icofont icofont-hat-alt"> </i><span>{{ trans('Students') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/project' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/project' ? 'block;' : 'none;' }}">
		                    <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projects' ? 'active' : '' }}">{{ trans('Add student') }}</a></li>
		                    <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">{{ trans('Import student') }}</a></li>
		                    <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">{{ trans('Counselling') }}</a></li>
		                </ul>
					</li> --}}

					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='quick_search' ? 'active' : '' }}" href="{{route('quick_search')}}"><i data-feather="search"> </i><span>Programs & Schools</span></a></li>

					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='students' ? 'active' : '' }}" href="{{route('students')}}"><i data-feather="user"> </i><span>Students</span></a></li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='applications' ? 'active' : '' }}" href="{{route('applications')}}"><i data-feather="file-text"> </i><span>Applications</span></a></li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='payment' ? 'active' : '' }}" href="{{route('payment')}}"><i data-feather="shopping-cart"> </i><span>Payment</span></a></li>

					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='growth-hub' ? 'active' : '' }}" href="{{route('growth-hub')}}"><i data-feather="users"> </i><span>Growth Hub</span></a></li>

					{{-- <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/project' ? 'active' : '' }}" href="#">
							<i data-feather="clipboard"></i><span>{{ trans('Applications') }} </span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/project' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/project' ? 'block;' : 'none;' }}">
		                    <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projects' ? 'active' : '' }}">{{ trans('New Application') }}</a></li>
		                    <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">{{ trans('Offer & Response') }}</a></li>
		                    <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">{{ trans('Institute Confirm') }}</a></li>
		                    <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">{{ trans('Visa Approval') }}</a></li>
		                    <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">{{ trans('Joint Course') }}</a></li>
		                </ul>
					</li> --}}
					
					{{-- <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='contacts' ? 'active' : '' }}" href="{{route('contacts')}}"><i data-feather="share-2"> </i><span>{{ trans('Find Course') }}</span></a></li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='contacts' ? 'active' : '' }}" href="{{route('contacts')}}"><i class="icofont icofont-wallet"> </i><span>{{ trans('My wallet') }}</span></a></li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='contacts' ? 'active' : '' }}" href="{{route('contacts')}}"><i class="icofont icofont-users"> </i><span>{{ trans('My team') }}</span></a></li> --}}
				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>