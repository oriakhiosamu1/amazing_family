@extends('users.partials.master')

@section('content')
	

<div class="page-head" data-bg-image="images/page-head-1.jpg">
	<div class="container">
		<h2 class="page-title">Sermons</h2>
	</div>
</div>

<main class="main-content">
	<div class="fullwidth-block">
		<div class="container">
			<div class="row">
				<div class="content col-md-8">
					<h2 class="section-title">All Sermons</h2>
					<ul class="seremon-list large">
						@forelse ($sermons as $sermon)
							<li>
								<img src="{{ asset('storage/'.$sermon->photo) }}" alt="" width="100">
								<div class="seremon-detail">
									<h3 class="seremon-title"><a href="sermons/{{ $sermon->id }}">{{ $sermon->title }}</a></h3>
									<div class="seremon-meta">
										<div class="pastor"><i class="fa fa-user"></i>{{ $sermon->speaker }} ||</div>
										<div class="date"><i class="fa fa-calendar"></i>{{ $sermon->date }} ||</div>
										<div class="date"><i class="fa fa-calendar"></i>{{ $sermon->text }}</div>
									</div>
									<p>{{ $sermon->intro }}</p>
								</div>
							</li>
						@empty
							<p>No sermon yet</p>
						@endforelse

					</ul>

				</div>
				<div class="sidebar col-md-3 col-md-offset-1">

					<div class="widget">
						<h3 class="widget-title">Service Time</h3>
						<p>First service 6am - 8am</p>
						<p>Second service 8am - 10am</p>
						<p>Wednesday - Fasting/prayer meeting 5pm - 7:30pm</p>
						<p>Second friday of every month vigil (all-night)</p>
						<p>Last friday of every month special vigil(all-night)</p>
					</div>

					<div class="widget">
						<h3 class="widget-title">Ministries</h3>
						<ul class="arrow">
							<li><a href="#">Choir</a></li>
							<li><a href="#">Ushers</a></li>
							<li><a href="#">Instrumentalist</a></li>
							<li><a href="#">Sanctuary Cleaners</a></li>
							<li><a href="#">Men Of Valour</a></li>
							<li><a href="#">Walfare</a></li>
							<li><a href="#">Children department</a></li>
							<li><a href="#">Evangelism Department</a></li>
							<li><a href="#">Technical Unit</a></li>
							<li><a href="#">Media</a></li>
						</ul>
					</div>

					<div class="widget">
						<h3 class="widget-title">Donations</h3>
						<p>Help in building God's Kingdom</p>
						<a href="#" class="button">Make a donation</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</main> <!-- .main-content -->

@endsection